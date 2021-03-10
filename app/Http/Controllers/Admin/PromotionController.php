<?php

namespace App\Http\Controllers\Admin;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends IndexController
{
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
