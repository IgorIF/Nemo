<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\FilialBranch;
use App\Repositories\FilialBranchesRepository;
use Illuminate\Http\Request;

class LCController extends Controller
{

    private ?FilialBranch $filialBranch;

    protected FilialBranchesRepository $filialBranchesRepository;

    /**
     * LCController constructor.
     */
    public function __construct(FilialBranchesRepository $filialBranchesRepository)
    {
        $this->filialBranchesRepository = $filialBranchesRepository;
    }

    public function index(Request $request, $alias) {

        $this->getFilialBranchData($alias);

        if ($this->filialBranch == null)
            abort(404);

        return view('site.main.lc')->with('dataFitSalonId', $this->filialBranch->dataFitSalonId);

    }

    protected function getFilialBranchData($alias)
    {
        $this->filialBranch = $this->filialBranchesRepository->getFilialByAlias($alias);
    }
}
