@extends('admin-panel.master')
@section('contant')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
               <form action="{{ url('admin/projects') }}" method="POST">
                @csrf
               <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                           <h2>Users-Create-Project-Page</h2>
                        </div>
                    </div>
                    <div class="card-body">
                       <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Skill Name">
                        @error('name')
                     <span class="text-danger">{{ $message }}</span>
                      @enderror
                       </div>
                       <div class="mb-3">
                        <label for="">Url</label>
                        <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" placeholder="Enter Skill Percent">
                        @error('url')
                     <span class="text-danger">{{ $message }}</span>
                      @enderror
                       </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection