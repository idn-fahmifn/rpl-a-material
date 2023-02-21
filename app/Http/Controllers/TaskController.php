<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();
        return view ('task.index', compact('task'));
    }
    public function create()
    {
        return view ('task.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Task::create($input);
        // dd($input);   
        return redirect('/task');
    }
    public function detail($id)
    {
        $task = Task::findOrFail($id);
        return view('task.detail', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $data = $request->all();
        $task->update($data);
        return redirect('/task');
        // dd($data);
    }

    public function destroy ($id)
    {
        $data = Task::find($id);
        $data->delete();
        return back();
    }
}
