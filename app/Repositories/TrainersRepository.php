<?php

namespace App\Repositories;

use App\Models\Trainer;
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
            $imageName = $this->updateImage($request->except('_method'), $trainer);
            $trainer->fill(['image' => $imageName]);
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

    public function videoAdd(array $data, int $id)
    {
        $trainer = $this->model::find($id);

        if ($trainer->video == null) {
            $trainer->video = $this->getLinkFromUrl($data['video']);
            $trainer->update();
        }

        return $trainer->video;
    }

    public function videoUpdate(array $data, int $id)
    {
        $trainer = $this->model::find($id);

        if ($trainer->video != null) {
            $trainer->video = $this->getLinkFromUrl($data['video']);
            $trainer->update();
        }

        return $trainer->video;
    }

    public function videoDelete(int $id)
    {
        $trainer = $this->model::find($id);

        if ($trainer->video != null) {
            $trainer->video = null;
            $trainer->update();
        }

        return $trainer->video;
    }
}
