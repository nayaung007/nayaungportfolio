@extends('admin-panel.master')
@section('contant')
<div class="container">
    <div class="col-md-12">
        <div class="row">
          <form action="{{ url('admin/categories/'.$categories->id) }}" method="POST">
            @csrf  
            @method('PATCH')
          <div class="card">
                <div class="card-header">
                    <div class="card-title">
                       <h3>Category Update</h3>
                    </div>
                </div>
                <div class="card-body">
                     <div>
                        <label for="">Name</label>
                        <input type="text" value="{{ $categories->name }}" class="form-control mt-2 @error('name')is-invalid @enderror" name="name" id="" placeholder="Enter your name">
                        @error('name')
                         <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                </div>
                <div class="card-footer">
                       <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection