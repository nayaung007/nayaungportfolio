@extends('admin-panel.master')
<style>
    .col-md-3{
        height: 100px;
        margin: 20px 30px;
    }
</style>
@section('contant')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3 btn btn-secondary">
            <h5>Admin and Users cards</h5>
            <a href="{{ url('admin/users') }}"><button class="btn btn-light">Users-list</button></a> 
            </div>
            <div class="col-md-3 btn btn-info">
              <h5>Skills</h5>
              <a href="{{ url('admin/skills') }}"><button class="btn btn-primary">skills-list</button></a>
            </div>
            <div class="col-md-3 btn btn-success">
               <h5>Projects</h5>
               <a href="{{ url('admin/projects') }}"><button class="btn btn-dark">Projects-list</button></a>
            </div>
            
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-3 btn btn-secondary">
            <h5>Students</h5>
            <a href="{{ url('admin/students') }}"><button class="btn btn-light">students-list</button></a> 
            </div>
            <div class="col-md-3 btn btn-info">
              <h5>Category</h5>
              <a href="{{ url('admin/categories') }}"><button class="btn btn-primary">categories-list</button></a>
            </div>
            <div class="col-md-3 btn btn-success">
               <h5>Posts</h5>
               <a href="{{ url('admin/posts') }}"><button class="btn btn-dark">Posts-list</button></a>
            </div>
    </div>
</div>

@endsection