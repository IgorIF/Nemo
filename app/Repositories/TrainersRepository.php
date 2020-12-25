<?php


namespace App\Repositories;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TrainersRepository extends Repository
{
    public function __construct(Trainer $trainer)
    {
        $this->model = $trainer;
    }

    public function getTrainers() {
        return Trainer::all();
    }

    public function destroyTrainer($id)
    {
        $trainer = Trainer::find($id);

        $this->deleteImage($trainer->image);
        $trainer->delete();

        return ['status' => 'Тренер ' . $trainer->name . ' удален'];
    }

    public function createTrainer(Request $request)
    {
        $data = $request->except('_token');
        $data['image-data'] = json_decode($data['image-data'], true);

        $data['image-data'] = $this->roundImageData($data['image-data']);

        $fileName = $this->cropAndSaveImage($data['image'], $data['image-data']);

        $trainer = Trainer::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'video' => $data['video'],
            'image' => $fileName
        ]);

        return ['status' => 'Тренер ' . $trainer->name . ' добавлен'];

    }

    public function updateTrainer(Request $request, int $id)
    {
        $result = [];

        $trainer = Trainer::find($id);

        if ($request->file('image')) {
            $data = $request->except('_method');
            $data['image-data'] = json_decode($data['image-data'], true);

            $data['image-data'] = $this->roundImageData($data['image-data']);
            $data['image'] = $this->cropAndSaveImage($data['image'], $data['image-data']);

            $this->deleteImage($trainer->image);
            $trainer->fill(['image' => $data['image']]);

            $result['image'] = $data['image'];
        } else {
            $trainer->fill([$request->get('field') => $request->get('text')]);
        }

        $trainer->update();

        $result['status'] = true;

        return $result;
    }

    private function roundImageData($imageData) {
        $imageData['x'] = round($imageData['x'], 0);
        $imageData['y'] = round($imageData['y'], 0);
        if ($imageData['width'] == $imageData['height'])
            $imageData['width'] = $imageData['height'] = round($imageData['width'], 0);
        else {
            $imageData['width'] = round($imageData['width'], 0);
            $imageData['height'] = round($imageData['height'], 0);
        }
        return $imageData;
    }

    private function cropAndSaveImage($image, $imageData) {
        $extension = $image->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $img = Image::make($image);
        $img->crop($imageData['width'], $imageData['height'], $imageData['x'], $imageData['y']);
        $img->save('storage/trainers/' . $fileName);
        return $fileName;
    }

    private function deleteImage($imageName) {
        $destinationPath = 'public/trainers/' . $imageName;
        Storage::delete($destinationPath);
    }
}
