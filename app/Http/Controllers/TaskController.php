<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Detail;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::orderBy('completed_at')
        ->orderBy('id', 'DESC')
        ->get();
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }
    public function store()
    {
        request()->validate([
            'title'=>'required|max:50',
            'description' =>'required|max:255',
            'due_date'=>'required',
        ]);
        // return 'your data was submitted!';
        Task::create([
            'title' => request('title'),
            'description' => request('description'),
            'due_date' =>request('due_date'),
        ]);
        return redirect('/');

    }
    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/');
    }

    public function update($id)
    {
        $task = Task::where('id',$id)->first();

        $task->completed_at = now();
        $task->save();
        return redirect('/');
    }

    public function viewDetails($id)
    {
        $tasks = Task::where('id',$id)->get();
        return view('tasks.taskDetails', compact('tasks'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.editTask', compact('task'));
    }

    public function updateTask(Request $req)
    {
        $req->validate([
            'title'=>'required|max:50',
            'description' =>'required|max:255',
            'due_date'=>'required',
        ]);
        $task= Task::where($req->id);
        $task->title = $req->title;
        $task->description = $req->description;
        $task->due_date = $req->due_date;
        $task->save();
        
        return redirect('/');
    }

}
