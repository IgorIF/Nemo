<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\VideosRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VideoController extends IndexController
{
    /**
     * VideoController constructor.
     * @param VideosRepository $videosRepository
     */
    public function __construct(VideosRepository $videosRepository)
    {
        $this->template = 'admin.index';
        $this->videosRepository = $videosRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'url' => 'required|url',
            'image' => 'required'
        ]);

        $video = $this->videosRepository->create($request);

        return response()->json(['video' => $video]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        //
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
        $request->validate([
            'url' => 'required|url',
        ]);

        $video = $this->videosRepository->update($request, $id);

        return response()->json(['video' => $video]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(int $id)
    {
        $this->videosRepository->delete($id);
    }
}
