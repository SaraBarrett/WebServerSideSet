<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function allTasks(){
        $tasks = $this->getTasks();
        return view('tasks.show_tasks', compact('tasks'));
    }

    protected function getTasks(){
        $tasks = DB::table('tasks')
        ->join('users', 'users.id', 'tasks.user_id')
        ->select('tasks.*', 'users.name as usname')
        ->get();



        return $tasks;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function viewTask($id){
        $task = DB::table('tasks')->where('tasks.id', $id)->join('users', 'users.id', 'tasks.user_id')
        ->select('tasks.*', 'users.name as usname')->first();

        return view('tasks.view_task', compact('task'));
    }

    public function deleteTask($id){
        DB::table('tasks')->where('id', $id)->delete();

        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
