<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PromotionController extends IndexController
{
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
     * @return Promotion
     */
    public function store(Request $request): Promotion
    {
        $request->validate([
            'name' => 'required',
            'percent' => 'required',
            'image' => 'required',
        ]);

        return $this->promotionsRepository->create($request);
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
     * @param Request $request
     * @param int $id
     * @return string|null
     */
    public function update(Request $request, int $id): ?string
    {
        $action = $request->get('action');
        $data = $request->except(['_method', 'action']);

        switch ($action) {
            case 'textUpdate':
                $this->promotionsRepository->textUpdate($data, $id);
                return null;
            case 'imageUpdate':
                return $this->promotionsRepository->imageUpdate($data, $id);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(int $id)
    {
        $this->promotionsRepository->delete($id);
    }
}
