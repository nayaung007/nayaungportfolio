@extends('admin-panel.master')
@section('contant')

             <!--main content  -->
             
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                <h2>User</h2>
                              
                                </div>
                            </div>
                            <div class="card-body">
                            @if(session('successMessage'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ (session('successMessage')) }}</strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            <table class="table table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>STATUS</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>
                                        <form action="{{ url('admin/users/'.$user->id.'/delete') }}" method="POST">
                                        @csrf
                                        <a href="{{ url('admin/users/'.$user->id.'/edit') }}"><button 
                                            type="button" class="btn btn-outline-success"><i class="bi bi-person-plus"></i> Edit</button></a>
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
            
             @endsection
           
        