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
        $result = [];

        $trainer = Trainer::find($id);

        $this->deleteImage($trainer->image);
        $trainer->delete();

        $result['status'] = true;

        return $result;
    }

    public function createTrainer(Request $request)
    {

        $result = [];

        $data = $request->all();

        $data['image-data'] = json_decode($data['image-data'], true);
        $data['image-data'] = $this->roundImageData($data['image-data']);

        $fileName = $this->cropAndSaveImage($data['image'], $data['image-data'], 'storage/images/trainers/');

        $result['trainer'] = Trainer::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'video' => $data['video'],
            'image' => $fileName
        ]);

        $result['status'] = true;

        return $result;

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

            $this->deleteImage('public/images/trainers/' . $trainer->image);
            $trainer->fill(['image' => $data['image']]);

            $result['image'] = $data['image'];
        } else {
            $trainer->fill([$request->get('field') => $request->get('text')]);
        }

        $trainer->update();

        $result['status'] = true;

        return $result;
    }
}
