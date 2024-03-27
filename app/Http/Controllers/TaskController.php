<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks =Task::all();
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
        // return 'your data was submitted!';
        $task = Task::create([
            'description' => request('description'),
        ]);
        return redirect('/');

    }
    public function delete()
    {

    }
}
