<?php

namespace App\Http\Controllers\Admin;

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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'video' => '',
        ]);

        $result = $this->trainersRepository->createTrainer($request);

        return redirect()->route('admin.trainers.index')->with($result);
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
     * @return array
     */
    public function update(Request $request, $id)
    {
        return $this->trainersRepository->updateTrainer($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

        return ($id);
        $result = $this->trainersRepository->destroyTrainer($id);

        if (is_array($result) && !empty($result['error']))
            return back()->with($result);

        return redirect()->route('admin.trainers.index')->with($result);
    }
}
