@extends('layouts.style')

@section('content')
    <h3>Task List</h3>
    @foreach($tasks as $task)
    <div class="card">
        <div class="card-body">
            {{$task->description}}

        </div>
    </div>
    @endforeach

    @include('footer')
@endsection

