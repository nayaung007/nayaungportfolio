@extends('admin-panel.master')
@section('contant')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ url('admin/projects/'.$project->id) }}" method="POST">
                    @csrf  
                    @method('PUT')
                    <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                        <h2>Users-Update-Project-Page</h2>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ $project->name }}" class="form-control" placeholder="Enter Skill Name">
                       </div>
                       <div class="mb-3">
                        <label for="">Url</label>
                        <input type="text" name="url" value="{{ $project->url }}" class="form-control" placeholder="Enter Skill Percent">
                       </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection