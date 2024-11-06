<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //

    public function show(Task $task)
    {

        $task = Task::all();
        // dd($task);
        return view('admin', compact('task'));
    }
    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('show');
    }
    public function individualTask($id)
    {
        $task = Task::findOrFail($id);
        return view('taskDesc', compact('task'));
    }
    public function makeTask(Request $request)
    {

        Task::create($request->input());
        // dd($task);
        return redirect()->route('show');
    }
    public function updateTask(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        // dd($task);

        $task->update($request->input());

        return redirect()->route('show');
    }
    public function editTask($id)
    {
        $task = Task::findOrFail($id);


        // $task->update($request->input());

        return view('edit-task', compact('task'));
    }
}
