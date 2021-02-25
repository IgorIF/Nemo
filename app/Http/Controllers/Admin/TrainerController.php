<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\TrainersRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TrainerController extends IndexController
{

    /**
     * IndexController constructor.
     * @param TrainersRepository $trainersRepository
     */
    public function __construct(TrainersRepository $trainersRepository)
    {
        $this->template = 'admin.index';
        $this->trainersRepository = $trainersRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {

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
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'video' => 'url|nullable',
        ]);

        $trainer = $this->trainersRepository->create($request);

        return response()->json(['trainer' => $trainer]);
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
    public function update(Request $request, int $id) : JsonResponse
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
