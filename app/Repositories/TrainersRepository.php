<?php


namespace App\Repositories;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TrainersRepository extends Repository
{
    public function __construct(Trainer $trainer)
    {
        $this->model = $trainer;
        $this->imagePath = 'images/trainers/';
    }

    /**
     * @param Request $request
     * @return Trainer
     */
    public function create(Request $request): Trainer
    {
        $data = $request->all();

        $data['image-data'] = json_decode($data['image-data'], true);
        $data['image-data'] = $this->roundImageData($data['image-data']);

        $fileName = $this->cropAndSaveImage($data['image'], $data['image-data'], 'storage/' . $this->imagePath);

        return $this->model::create([
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
    public function update(Request $request, int $id): ?string
    {
        $imageName = null;

        $trainer = $this->model::find($id);

        if ($request->file('image')) {
            $data = $request->except('_method');

            $data['image-data'] = json_decode($data['image-data'], true);
            $data['image-data'] = $this->roundImageData($data['image-data']);

            $data['image'] = $this->cropAndSaveImage($data['image'], $data['image-data'], 'storage/' . $this->imagePath);

            $this->deleteImage('public/' . $this->imagePath . $trainer->image);
            $trainer->fill(['image' => $data['image']]);

            $imageName = $data['image'];
        } else {
            $trainer->fill([$request->get('field') => $request->get('text')]);
        }

        $trainer->update();

        return $imageName;
    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        $trainer = $this->model::find($id);
        $this->deleteImage('public/' . $this->imagePath . $trainer->image);
        $trainer->delete();
    }
}
