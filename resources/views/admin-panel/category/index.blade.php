@extends('admin-panel.master')
<style>
 .add{
    float: right;
 }
</style>
@section('contant')

<div class="container">
    <div class="col-md-12">
        <div class="row">
            
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Category Index</h3>
                    </div>
                    <a href="{{ url('admin/categories/create') }}" class="btn btn-primary add"><i class="bi bi-person-lines-fill"></i> Add New</a>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($categories as $index => $category)
                          <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <form action="{{ url('admin/categories/'.$category->id) }}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                <td>
                                    <a href="{{ url('admin/categories/'.$category->id.'/edit') }}"><button type="button" class="btn btn-outline-success"><i class="bi bi-person-plus"></i> Edit</button></a>
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to deleted')"><i class="bi bi-trash-fill"></i> Delete</button>
                                </td>
                                </form>
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


@endsection