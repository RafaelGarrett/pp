<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Models\ModelTask;

class TasksController extends Controller
{
    private $objTask;

    public function __construct()
    {
        $this->objTask= new ModelTask();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->objTask->all();
        return view('index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $cad = $this->objTask->create([
            'title'=>$request->title,
            'description'=>$request->description,
            'completed'=>$request->completed,
        ]);

        if($cad){
            return redirect('tasks');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = $this->objTask->find($id);
        return view('show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = $this->objTask->find($id);
        return view('create',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, $id)
    {
        $this->objTask->where(['id'=>$id])->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'completed'=>$request->completed,
        ]);
        return redirect('tasks');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objTask->destroy($id);
        return($del)?"sim":"não";
    }
}
