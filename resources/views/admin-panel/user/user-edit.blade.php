@extends('admin-panel.master')
@section('contant')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <h2>User Edit</h2>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class="col-md-7">
                                <form action="{{ url('admin/users/'.$user->id.'/update') }}" method="POST">
                                    @csrf 
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="">Selected Status</option>
                                            <option value="admin" 
                                            @if($user->status == 'admin') selected @endif
                                            >
                                                Admin</option>
                                            <option value="user"
                                            @if($user->status == 'user') selected @endif
                                            >User</option>
                                        </select>
                                    </div><br>
                                </div>
                                <div class="card-footer">
                                <button class="btn btn-success">Update</button>
                                </form>
                           
                                </div>
                            </div>
                            
                             
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
           
     