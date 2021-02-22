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

    public function update(Request $request)
    {
        $result = [];

        $text = $this->model::find($request->get('id'));
        $num = $text->fill(['text' => $request->get('text')])->update();

        if ($num == 1)
            $result['status'] = true;
        return $result;
    }
}
