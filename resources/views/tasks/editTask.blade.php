@extends('bootstrap.style')

@section('items')
<h2>Edit Task</h2>
@if($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
           <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
@endif
<form method="POST" action="/edit">
    <div class="form-group mb-1">
        @csrf
        <input type="hidden" name="id" value="{{ $task['id'] }}">
        <label for="title">Task Title</label>
        <input type="text" name="title" class="form-control mb-1" value="{{ $task['title'] }}">
       <label for="description">Task Description</label>
       <input type="text" class="form-control" name="description" value="{{ $task['title'] }}">
       <label for="date">Due Date</label>
       <div class="col-sm-4">
         <div class="input-group">
          <input type="date" class="form-control" name="due_date" value="{{ $task['due_date'] }}">
        </div>
        <div class="d-grid form-group mt-3">
          <button type="submit" class="btn btn-primary">Update Task</button>
      </div>
</form>
<script type="text/javascript">
$(function() {
  $('#datepicker').datepicker();
});
</script>
@include('footer')
@endsection

