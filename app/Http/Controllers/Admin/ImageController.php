<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ImageController extends IndexController
{
    /**
     * @param Request $request
     * @param int $id
     * @return string
     */
    public function update(Request $request, int $id): string
    {
        return $this->imagesRepository->update($request, $id);
    }
}
