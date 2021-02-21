<?php


namespace App\Repositories;

use App\Models\Image;
use Illuminate\Http\Request;


class ImagesRepository extends Repository
{
    private const IMAGE_PATH = 'storage/images/images/';

    public function __construct(Image $image)
    {
        $this->model = $image;
    }

    /**
     * @param Request $request
     * @param int $id
     * @return string|null
     */
    public function updateImage(Request $request, int $id): ?string
    {
        $imageName = null;

        $image = Image::find($id);

        $data = $request->except('_method');
        $data['image-data'] = json_decode($data['image-data'], true);

        $data['image-data'] = $this->roundImageData($data['image-data']);
        $data['image'] = $this->cropAndSaveImage($data['image'], $data['image-data'], self::IMAGE_PATH);

        //$this->deleteImage('public/images/trainers/' . $trainer->image);
        $image->fill(['image' => $data['image']]);

        $imageName = $data['image'];

        $image->update();

        return $imageName;
    }
}
