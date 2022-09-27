@extends('admin-panel.master')
<style>
    .student{
        float: right;
    }
</style>
@section('contant')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <form action="" method="POST">
                <div class="col-md-12">
                 <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Student</h3>
                            <a href="{{ url('admin/students/create') }}" class="btn btn-primary student"><i class="bi bi-person-lines-fill"></i> Student-Create</a>
                        </div>
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
                                    <th>Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($students as $index => $student)
                              <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $student->count }}</td>
                                    <form action="{{ url('admin/students/'.$student->id) }}" method="POST">
                                        @csrf  
                                        @method('DELETE')
                                    <td>
                                        <a href="{{ url('admin/students/'.$student->id.'/edit ') }}"><button type="button" class="btn btn-outline-success"><i class="bi bi-person-plus"></i> Edit</button></a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to deleted')" ><i class="bi bi-trash-fill"></i> Delete</button>
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
            </form>
        </div>
    </div>
</div>
@endsection