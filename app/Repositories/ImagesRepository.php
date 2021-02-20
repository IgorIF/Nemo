<?php


namespace App\Repositories;

use App\Models\Image;


class ImagesRepository extends Repository
{
    public function __construct(Image $image)
    {
        $this->model = $image;
    }
}
