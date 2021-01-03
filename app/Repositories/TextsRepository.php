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
        $result = [];

        $text = Text::find($request->get('id'));
        $num = $text->fill(['text' => $request->get('text')])->update();

        if ($num == 1)
            $result['status'] = true;
        return $result;
    }

    public function getInRangeById($intervals)
    {
        $texts = parent::getInRangeById($intervals);

        $texts = $texts->mapWithKeys(function ($item) {
            return [$item->id => $item];
        });

        return $texts;
    }
}
