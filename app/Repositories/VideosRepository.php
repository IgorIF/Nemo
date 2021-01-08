<?php


namespace App\Repositories;


use App\Models\Text;
use App\Models\Trainer;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideosRepository extends Repository
{
    public function __construct(Video $video)
    {
        $this->model = $video;
    }

    public function getAllReviews() {
        return $this->model->where('id', '>', 1)->get();
    }

    public function destroyVideo($id)
    {
        $result = [];

        $video = Video::find($id);

        $this->deleteImage($video->image);
        $video->delete();

        $result['status'] = true;

        return $result;
    }

    private function deleteImage($imageName) {
        $destinationPath = 'public/images/videos/' . $imageName;
        Storage::delete($destinationPath);
    }
}
