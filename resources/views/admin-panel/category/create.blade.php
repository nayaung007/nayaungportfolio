@extends('admin-panel.master')
@section('contant')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <form action="{{ url('admin/categories') }}" method="POST">
                @csrf
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                       <h3>Category-Create</h3>
                    </div>
                </div>
                <div class="card-body">
                  <div>
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control mt-2 @error('name') is-invalid @enderror" id="" placeholder="Enter your name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Create</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection