<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

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
            'description' =>'required|max:255',
        ]);
        // return 'your data was submitted!';
        Task::create([
            'description' => request('description'),
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

}
