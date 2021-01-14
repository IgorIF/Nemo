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

    public function createVideo(Request $request)
    {
        $result = [];

        $data = $request->all();

        //$data['image-data'] = json_decode($data['image-data'], true);
        //$data['image-data'] = $this->roundImageData($data['image-data']);

        $fileName = $this->cropAndSaveImage($data['image'], $data['image-data']);

        $result['trainer'] = Video::create([
            'url' => $data['url'],
            'image' => $fileName
        ]);

        $result['status'] = true;

        return $result;
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

    private function cropAndSaveImage($image, $imageData) {
        $extension = $image->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $img = Image::make($image);
        $img->crop($imageData['width'], $imageData['height'], $imageData['x'], $imageData['y']);
        $img->save('storage/images/videos/' . $fileName);
        return $fileName;
    }

    private function deleteImage($imageName) {
        $destinationPath = 'public/images/videos/' . $imageName;
        Storage::delete($destinationPath);
    }
}
