<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoController extends Controller
{

    public function index()
    {
        $task = Task::get();
        return view('home', ['tasks'=> $task]);
    }

    //store
    public function store(Request $request)
    {

        $this->validate($request, [
            'task' => 'required|min:2|max:1000',
            ],[
            'task.required' => ' The task field is required.',
            ]);

        Task::create([
            'user_id' =>auth()->user()->id,
            'task' => $request->task
        ]);

        return redirect()->back()->with('status','Task Added Successfully');
    }

    public function delete($task_id)
    {
        $task = Task::find($task_id);
        $task->delete();
        return redirect()->back()->with('status','Task Delete Successfully');
    }

    public function update($task_id)
    {
        $task = Task::find($task_id);
        $task->status = 1;
        $task->update();
        return redirect()->back()->with('status','Task Update Successfully');
    }
}
