<?php

namespace App\Repositories;

use App\Models\Text;
use Illuminate\Http\Request;

class TextsRepository extends Repository
{
    public function __construct(Text $text)
    {
        $this->model = $text;
    }

    /**
     * @param Request $request
     * @return int
     */
    public function update(Request $request): int
    {
        $text = $this->model::find($request->get('id'));
        return $text->fill(['text' => $request->get('text')])->update();
    }
}
