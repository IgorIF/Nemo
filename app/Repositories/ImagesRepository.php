<?php

namespace App\Repositories;

use App\Models\Image;
use Illuminate\Http\Request;

class ImagesRepository extends Repository
{
    public function __construct(Image $image)
    {
        $this->model = $image;
        $this->imagePath = 'images/images/';
    }

    /**
     * @param Request $request
     * @param int $id
     * @return string|null
     */
    public function update(Request $request, int $id): ?string
    {
        $image = $this->model::find($id);

        $data = $request->except('_method');
        $data['image-data'] = json_decode($data['image-data'], true);
        $data['image-data'] = $this->roundImageData($data['image-data']);

        $data['image'] = $this->cropAndSaveImage($data['image'], $data['image-data'], 'storage/' . $this->imagePath);

        $this->deleteImage('public/' . $this->imagePath . $image->image);

        $image->fill(['image' => $data['image']]);
        $image->update();

        return $data['image'];
    }
}
