<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Repository
{
    protected $model = false;
    protected $imagePath;

    /**
     * @param array $intervals
     * @return Collection
     */
    public function getInRangeById(array $intervals): Collection
    {
        $result = collect();

        foreach ($intervals as $from => $to) {
            $query = $this->model->where('id', '>=', $from)->where('id', '<=', $to)->get();
            $result = $result->merge($query);
        }

        $result = $result->mapWithKeys(function ($item) {
            return [$item->id => $item];
        });

        return $result;
    }

    /**
     * @return mixed
     */
    public function getAll() {
        return $this->model->all();
    }

    /**
     * @param array $imageData
     * @return array
     */
    protected function roundImageData(array $imageData): array
    {
        $imageData['x'] = round($imageData['x'], 0);
        $imageData['y'] = round($imageData['y'], 0);
        if ($imageData['width'] == $imageData['height'])
            $imageData['width'] = $imageData['height'] = round($imageData['width'], 0);
        else {
            $imageData['width'] = round($imageData['width'], 0);
            $imageData['height'] = round($imageData['height'], 0);
        }
        return $imageData;
    }

    /**
     * @param $image
     * @param array $imageData
     * @param string $path
     * @return string
     */
    protected function cropAndSaveImage($image, array $imageData, string $path): string
    {
        $extension = $image->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $img = Image::make($image);
        $img->crop($imageData['width'], $imageData['height'], $imageData['x'], $imageData['y']);
        $img->save($path . $fileName);
        return $fileName;
    }

    /**
     * @param array $data
     * @param Model $model
     * @return string
     */
    protected function updateImage(array $data, Model $model): string
    {
        $data['image-data'] = json_decode($data['image-data'], true);
        $data['image-data'] = $this->roundImageData($data['image-data']);
        $imageName = $this->cropAndSaveImage($data['image'], $data['image-data'], 'storage/' . $this->imagePath);

        $this->deleteImage('public/' . $this->imagePath . $model->image);

        return $imageName;
    }

    /**
     * @param string $path
     */
    protected function deleteImage(string $path)
    {
        Storage::delete($path);
    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        $this->model::find($id)->delete();
    }

    protected function getLinkFromUrl($url): string
    {
        $link = null;

        $arr = explode('/', $url);
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
