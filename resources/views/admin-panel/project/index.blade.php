@extends('admin-panel.master')
<style>
    .create{
        float: right;
    }
</style>
@section('contant')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                           <h2>Project-Index-Page</h2>
                        </div>
                        <a href="{{ url('admin/projects/create') }}"><button class="btn btn-primary create"> <i class="bi bi-person-lines-fill"></i> Project-Create</button></a>
                    </div>
                    <div class="card-body">
                    @if(session('successMessage'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ (session('successMessage')) }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                       <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>URl</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($projects as $index => $project)
                           <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->url }}</td>
                                <td>
                                    <form action="{{ url('admin/projects/'.$project->id) }}" method="POST">
                                    @csrf
                                   @method('DELETE') 
                                    <a href="{{ url('admin/projects/'.$project->id.'/edit') }}"><button type="button" class="btn btn-outline-success"><i class="bi bi-person-plus"></i> Edit</button></a>
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete')"><i class="bi bi-trash-fill"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                       </table>
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection