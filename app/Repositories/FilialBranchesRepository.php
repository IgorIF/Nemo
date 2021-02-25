<?php

namespace App\Repositories;

use App\Models\FilialBranch;
use Illuminate\Http\Request;

class FilialBranchesRepository extends Repository
{
    public function __construct(FilialBranch $filialBranch)
    {
        $this->model = $filialBranch;
    }

    public function update(Request $request, int $id)
    {
        $filialBranch = $this->model::find($id);
        $filialBranch->fill([$request->get('field') => $request->get('text')]);
        $filialBranch->update();
    }
}
