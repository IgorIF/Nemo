<?php


namespace App\Repositories;

use App\Models\Text;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TextsRepository extends Repository
{
    public function __construct(Text $text)
    {
        $this->model = $text;
    }

    public function updateText(Request $request)
    {
        $text = Text::find($request->get('id'));
        return $text->fill(['text' => $request->get('text')])->update();
    }
}
