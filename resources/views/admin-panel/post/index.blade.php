@extends('admin-panel.master')
<style>
    .add{
        float: right;
    }
    .image img{
        width: 100px;
        height: 80px;
        border-radius: 50%;
        border: 3px solid skyblue;
    }
</style>
@section('contant')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Post Index</h3>
                    </div>
                    <a href="{{ url('admin/posts/create') }}" class="btn btn-primary add"><i class="bi bi-person-lines-fill"></i> Add New</a>
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
                                <th>No.</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($posts as $index => $post)
                           <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $post->category->name }}</td>
                                <td class="image">
                                    <img src="{{ asset('storage/post-images/'.$post->image) }}" alt="" >
                                </td>
                                <td>{{ $post->title }}</td>
                                <td><textarea readonly>{{ $post->content }}</textarea></td>
                                <td>
                                    <form action="{{ url('admin/posts/'.$post->id) }}" method="POST">
                                        @csrf  
                                        @method('DELETE')
                                    <a href="{{ url('admin/posts/'.$post->id.'/edit') }}"><button type="button" class="btn btn-outline-success"><i class="bi bi-person-plus"></i>Edit</button></a>
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to deleted')"><i class="bi bi-trash-fill"></i>Delete</button>
                                    <a href="{{ url('admin/posts/'.$post->id) }}"><button  type="button" class="btn btn-outline-primary"><i class="bi bi-chat-dots-fill"></i>message</button></a>
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