<?php


namespace App\Repositories;


use App\Models\Text;
use App\Models\Video;

class VideosRepository extends Repository
{
    public function __construct(Video $video)
    {
        $this->model = $video;
    }

    public function getAllReviews() {
        return $this->model->where('id', '>', 1)->get();
    }
}
