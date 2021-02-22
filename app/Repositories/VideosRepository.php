<?php


namespace App\Repositories;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosRepository extends Repository
{
    public function __construct(Video $video) {
        $this->model = $video;
    }

    public function getAllReviewsVideos() {
        return $this->model->where('id', '>', 1)->get();
    }

    public function getAboutUsVideo()
    {
        return $this->model->where('id', 1)->first();
    }

    /**
     * @param Request $request
     * @return Video
     */
    public function createVideo(Request $request) : Video
    {
        $data = $request->all();

        $data['image-data'] = json_decode($data['image-data'], true);
        $data['image-data'] = $this->roundImageData($data['image-data']);

        $fileName = $this->cropAndSaveImage($data['image'], $data['image-data'], 'storage/images/videos/');

        return Video::create([
            'url' => $this->getLink($data['url']),
            'image' => $fileName
        ]);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Video
     */
    public function updateVideo(Request $request, int $id): Video
    {
        $fill = [];

        $video = Video::find($id);

        if ($request->file('image')) {
            $data = $request->except('_method');
            $data['image-data'] = json_decode($data['image-data'], true);

            $data['image-data'] = $this->roundImageData($data['image-data']);
            $data['image'] = $this->cropAndSaveImage($data['image'], $data['image-data'], 'storage/images/videos/');

            $this->deleteImage('public/images/videos/' . $video->image);

            $fill['image'] = $data['image'];
        }

        $fill['url'] = $this->getLink($request['url']);
        $video->fill($fill);

        $video->update();

        return $video;
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $video = Video::find($id);
        $this->deleteImage('public/images/videos/' . $video->image);
        $video->delete();
    }

    private function getLink($data): string
    {
        $link = null;

        $arr = explode('/', $data);
        $linkCase = $arr[count($arr) - 1];

        if (count(explode('=', $linkCase)) < 2) {
            $link = $linkCase;
        } else {
            $arr = explode('=', $linkCase);
            $link = $arr[count($arr) - 1];
        }
        return $link;
    }
}
