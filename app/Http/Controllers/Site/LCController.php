<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Filial;
use App\Repositories\FilialsRepository;
use Illuminate\Http\Request;

class LCController extends Controller
{

    private ?Filial $filialBranch;

    protected FilialsRepository $filialBranchesRepository;

    /**
     * LCController constructor.
     */
    public function __construct(FilialsRepository $filialBranchesRepository)
    {
        $this->filialBranchesRepository = $filialBranchesRepository;
    }

    public function index(Request $request, $alias) {

        $this->getFilialBranchData($alias);

        if ($this->filialBranch == null)
            abort(404);

        return view('site.main.lc.index')->with('dataFitSalonId', $this->filialBranch->dataFitSalonId);

    }

    protected function getFilialBranchData($alias)
    {
        $this->filialBranch = $this->filialBranchesRepository->getFilialByAlias($alias);
    }
}
