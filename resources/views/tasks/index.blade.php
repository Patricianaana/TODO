@extends('layouts.style')

@section('items')
    <h3>Task List</h3>
    @foreach($tasks as $task)
    <div class="card" style="margin-bottom: 20px">
        <div class="card-body">
            {{$task->description}}
            <br>
            <a class="btn btn-light" href="#">Complete</a>
        </div>
    </div>
    @endforeach
    <a href="/create" class="btn btn-primary btn-lg btn-block">New Task</a>

    @include('footer')
@endsection

