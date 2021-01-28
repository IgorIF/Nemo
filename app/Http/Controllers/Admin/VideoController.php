<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\VideosRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VideoController extends AdminController
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
     * @return array
     */
    public function store(Request $request): array
    {
        $request->validate([
            'url' => 'required|url',
            'image' => 'required'
        ]);

        return $this->videosRepository->createVideo($request);
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
     * @return array
     */
    public function update(Request $request, int $id): array
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        return $this->videosRepository->updateVideo($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return array
     */
    public function destroy(int $id): array
    {
        return $this->videosRepository->destroyVideo($id);
    }
}
