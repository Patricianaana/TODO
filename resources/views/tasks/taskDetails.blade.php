@extends('bootstrap.style')

@section('items')
    <h5 style="text-align: center">Task Details</h5>
    @foreach($tasks as $task)
        <div class="d-grid">
            <div class="card-body">
                <h6>Task title</h6>
                <p>{{$task->title}}</p>
                <h6>Task details</h6>
                <p>
                  {{$task->description}}
                </p>
                <h6>Due date</h6>
                <p>{{$task->due_date}}</p>
            </div>
        </div>
    @endforeach
    <div class="d-grid">
        <a href="/" class="btn btn-primary btn-lg btn-block">Back</a>
    </div>
    @include('footer')
@endsection

