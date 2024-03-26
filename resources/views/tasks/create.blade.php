    @extends('layouts.style')

    @section('content')
    <h2>Add New Task</h2>
    <form method="POST" action="/tasks">
        <div class="form-group">
            @csrf
           <label for="description">Task Description</label>
           <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
    @include('footer')
    @endsection
    
