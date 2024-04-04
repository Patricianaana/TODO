    @extends('layouts.style')

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
           <label for="description">Task Description</label>
           <input type="text" class="form-control" name="description">
        </div>
        {{-- @error('description')
           <div class="alert alert-danger" role="alert">
              {{$message}}
           </div>
        @enderror --}}
        <div class="d-grid form-group mt-3">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
    @include('footer')
    @endsection
    
