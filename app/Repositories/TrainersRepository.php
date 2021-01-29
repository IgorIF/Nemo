<?php


namespace App\Repositories;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainersRepository extends Repository
{

    private const IMAGE_PATH = 'storage/images/trainers/';

    public function __construct(Trainer $trainer)
    {
        $this->model = $trainer;
    }

    public function getTrainers() {
        return Trainer::all();
    }

    /**
     * @param Request $request
     * @return Trainer
     */
    public function createTrainer(Request $request): Trainer
    {
        $data = $request->all();

        $data['image-data'] = json_decode($data['image-data'], true);
        $data['image-data'] = $this->roundImageData($data['image-data']);

        $fileName = $this->cropAndSaveImage($data['image'], $data['image-data'], self::IMAGE_PATH);

        return Trainer::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'video' => $data['video'],
            'image' => $fileName
        ]);

    }

    /**
     * @param Request $request
     * @param int $id
     * @return string|null
     */
    public function updateTrainer(Request $request, int $id): ?string
    {
        $imageName = null;

        $trainer = Trainer::find($id);

        if ($request->file('image')) {
            $data = $request->except('_method');
            $data['image-data'] = json_decode($data['image-data'], true);

            $data['image-data'] = $this->roundImageData($data['image-data']);
            $data['image'] = $this->cropAndSaveImage($data['image'], $data['image-data'], self::IMAGE_PATH);

            $this->deleteImage('public/images/trainers/' . $trainer->image);
            $trainer->fill(['image' => $data['image']]);

            $imageName = $data['image'];
        } else {
            $trainer->fill([$request->get('field') => $request->get('text')]);
        }

        $trainer->update();

        return $imageName;
    }

    /**
     * @param $id
     */
    public function destroyTrainer($id)
    {
        $trainer = Trainer::find($id);
        $this->deleteImage($trainer->image);
        $trainer->delete();
    }
}
