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


        //$filenameToStore = "trainers/1234214" . time() . "." . $extention;

       // $path = $request->file('image')->store('public/', $filenameToStore);

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = '1233123123123' . $extension;
        $destinationPath = 'public/trainers/' . time() . '.' . $extension;
        Storage::put($destinationPath, file_get_contents($file->getRealPath()));

        //$request->file('image')->move(public_path(). '/images', '1111111111'.$extention);

       // dd($filename);

        /*$trainer = Trainer::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'video' => $data['video'],
            'image' => 'fsdf'
        ]);*/


    }
}
