<?php


namespace App\Repositories;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Repository
{
    protected $model = false;

    public function getInRangeById($intervals) {

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

    public function getAll() {
        return $this->model->all();
    }

    protected function roundImageData($imageData) {
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

    protected function cropAndSaveImage($image, $imageData, $path) {
        $extension = $image->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $img = Image::make($image);
        $img->crop($imageData['width'], $imageData['height'], $imageData['x'], $imageData['y']);
        $img->save($path . $fileName);
        return $fileName;
    }

    protected function deleteImage($path) {
        Storage::delete($path);
    }
}
