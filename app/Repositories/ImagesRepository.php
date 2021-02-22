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

        $imageName = $this->updateImage($request->except('_method'), $image);

        $image->fill(['image' => $imageName]);
        $image->update();

        return $imageName;
    }
}
