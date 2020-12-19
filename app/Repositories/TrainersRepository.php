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

        $destinationPath = 'public/trainers/' . $trainer->image;
        Storage::delete($destinationPath);

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
        $data = $request->except('_token', '_method');

        $trainer = Trainer::find($id);

        if(isset($data['image'])) {
            $file = $data['image'];
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $destinationPathAdd = 'public/trainers/' . $fileName;
            Storage::put($destinationPathAdd, file_get_contents($file->getRealPath()));

            $destinationPathDelete = 'public/trainers/' . $trainer->image;
            Storage::delete($destinationPathDelete);

            $data['image'] = $fileName;
        }

        $trainer->fill($data)->update();

        return ['status' => 'Тренер ' . $trainer->name . ' обновлен'];
    }

    private function roundImageData($imageData) {
        if ($imageData['x'] < 0) {
            $imageData['x'] = 0;
        }
        if ($imageData['y'] < 0) {
            $imageData['y'] = 0;
        }
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
}
