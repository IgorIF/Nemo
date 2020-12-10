<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TrainerRequest;
use App\Models\Trainer;
use App\Repositories\TrainersRepository;
use Illuminate\Http\Request;

class TrainerController extends AdminController
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'Тренеры';

        $trainers = $this->getTrainers();

        $this->content = view('admin.content')->with('trainers', $trainers)->render();

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->title = 'Добавить тренера';

        $this->content = view('admin.trainers_create_content')->render();

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainerRequest $request)
    {
        $result = $this->trainersRepository->createTrainer($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $result = $this->trainersRepository->destroyTrainer($id);

        if (is_array($result) && !empty($result['error']))
            return back()->with($result);

        return redirect()->route('admin.trainers.index')->with($result);
    }

    private function getTrainers() {
        $trainers = $this->trainersRepository->getAll();
        return $trainers;
    }
}
