<?php


namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use phpDocumentor\Reflection\Types\Mixed_;

class Repository
{
    protected $model = false;

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
     * @param string $path
     */
    protected function deleteImage(string $path) {
        Storage::delete($path);
    }
}
