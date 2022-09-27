@extends('admin-panel.master')
<style>
.skill{
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
                    <h3>User Skills</h3>
                <a href="{{ url('admin/skills/create') }}"><button class="btn btn-primary skill mb-3"><i class="bi bi-person-lines-fill"></i> Add-Skill-Create</button></a>
                @if(session('successMessage'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ (session('successMessage')) }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-hover">
            
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Percent</th>
                    <th>Action</th>
                </tr>
            </thead>
              <tbody>
              @foreach($skills as $index => $skill)
                <tr>
                   
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->percent }}</td>
                    <td>
                    <form action="{{ url('admin/skills/'.$skill->id ) }}" method="POST">
                    @csrf
                   @method('DELETE') 
                        <a href="{{ url('admin/skills/'.$skill->id.'/edit') }}"><button type="button" class="btn btn-outline-success"><i class="bi bi-person-plus"></i> Edit</button></a>
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure deleted?')"><i class="bi bi-trash-fill"></i> Delete</button></a>
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