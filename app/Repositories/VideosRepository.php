<?php


namespace App\Repositories;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class VideosRepository extends Repository
{
    public function __construct(Video $video)
    {
        $this->model = $video;
    }

    public function getAllReviews() {
        return $this->model->where('id', '>', 1)->get();
    }

    public function createVideo(Request $request): array
    {
        $result = [];

        $data = $request->all();

        $data['image-data'] = json_decode($data['image-data'], true);
        $data['image-data'] = $this->roundImageData($data['image-data']);

        $fileName = $this->cropAndSaveImage($data['image'], $data['image-data'], 'storage/images/videos/');

        $result['trainer'] = Video::create([
            'url' => $data['url'],
            'image' => $fileName
        ]);

        $result['status'] = true;

        return $result;
    }

    public function destroyVideo($id): array
    {
        $result = [];

        $video = Video::find($id);

        $this->deleteImage('public/images/videos/' . $video->image);
        $video->delete();

        $result['status'] = true;

        return $result;
    }
}
