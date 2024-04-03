@extends('layouts.style')

@section('items')
    <h3>Task List</h3>
    @foreach($tasks as $task)
    <div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px">
        <div class="card-body">
            <p>
              {{  $task->description}}
            </p>
            @if(!$task->isCompleted())
            <form action="/tasks/{{$task->id }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="d-grid">
                    <button input="submit" class="btn btn-light">Complete</button>
                </div>
            </form>
            @else
            <form action="/tasks/{{$task->id }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="d-grid">
                    <button input="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
            @endif
        </div>
    </div>
    @endforeach
    <div class="d-grid">
        <a href="/create" class="btn btn-primary btn-lg btn-block">New Task</a>
    </div>
    @include('footer')
@endsection

