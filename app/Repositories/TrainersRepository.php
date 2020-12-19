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

        $extension = $data['image']->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;

        $img = Image::make($data['image']);

        if ($data['image-data']['x'] < 0) {
            $data['image-data']['x'] = 0;
        }
        if ($data['image-data']['y'] < 0) {
            $data['image-data']['y'] = 0;
        }

        $data['image-data']['x'] = round($data['image-data']['x'], 0);
        $data['image-data']['y'] = round($data['image-data']['y'], 0);
        if ($data['image-data']['width'] == $data['image-data']['height'])
            $data['image-data']['width'] = $data['image-data']['height'] = round($data['image-data']['width'], 0);
        else {
            $data['image-data']['width'] = round($data['image-data']['width'], 0);
            $data['image-data']['height'] = round($data['image-data']['height'], 0);
        }

        $img->crop($data['image-data']['width'], $data['image-data']['height'], $data['image-data']['x'], $data['image-data']['y']);
        $img->save('storage/trainers/' . $fileName);

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
}
