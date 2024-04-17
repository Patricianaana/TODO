@extends('bootstrap.style')

@section('items')
    <h3>Task Category</h3>
    <div class="card" style="margin-bottom: 20px;">
        <div class="card-body">
            <div class="col-sm-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-briefcase me-2"></i>
                    <h6 class="mb-0">Work</h6>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">View All</button>
            </div>
        </div>
    </div>
    
    @include('footer')
@endsection

