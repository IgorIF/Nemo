<?php


namespace App\Repositories;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainersRepository extends Repository
{
    public function __construct(Trainer $trainer)
    {
        $this->model = $trainer;
    }

    public function getAll() {
        return Trainer::all();
    }

    public function destroyTrainer($id)
    {
        $trainer = Trainer::find($id);
        $trainer->delete();
    }

    public function createTrainer(Request $request)
    {
        $data = $request->except('_token');

        $file = $data['image'];
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $destinationPath = 'public/trainers/' . $fileName;
        Storage::put($destinationPath, file_get_contents($file->getRealPath()));


        $trainer = Trainer::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'video' => $data['video'],
            'image' => $fileName
        ]);

    }
}
