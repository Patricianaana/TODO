    @extends('bootstrap.style')

    @section('items')
    <h2>Add New Task</h2>
    @if($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
    @endif
    <form method="POST" action="/tasks">
        <div class="form-group mb-1">
            @csrf
            <label for="title">Task Title</label>
            <input type="text" name="title" class="form-control mb-1">
           <label for="description">Task Description</label>
           <input type="text" class="form-control" name="description">
           <label for="due_date">Due Date</label>
           <div class="col-sm-4">
             <div class="input-group">
              <input type="date" class="form-control" name="due_date">
             </div>
           </div>
        </div>
        <div class="d-grid form-group mt-3">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
    @include('footer')
    @endsection
    
