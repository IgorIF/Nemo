<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Trainer;
use App\Models\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TrainerController extends IndexController
{

    /**
     * @param Request $request
     * @return Trainer
     */
    public function store(Request $request): Trainer
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'video' => 'url|nullable',
        ]);

        return $this->trainersRepository->create($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $action = $request->get('action');
        $data = $request->except(['_method', 'action']);

        switch ($action) {
            case 'videoAdd':
                $request->validate([
                    'video' => 'url'
                ]);
                $video = $this->trainersRepository->videoAdd($data, $id);
                return response()->json(['video' => $video]);
            case 'videoUpdate':
                $request->validate([
                    'video' => 'url'
                ]);
                $video = $this->trainersRepository->videoUpdate($data, $id);
                return response()->json(['video' => $video]);
            case 'videoDelete':
                $video = $this->trainersRepository->videoDelete($id);
                return response()->json(['video' => $video]);
        }

        $imageName = $this->trainersRepository->update($request, $id);
        return response()->json(['image' => $imageName]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(int $id)
    {
        $this->trainersRepository->delete($id);
    }
}
