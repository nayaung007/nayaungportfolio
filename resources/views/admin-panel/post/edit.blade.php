@extends('admin-panel.master')
@section('contant')

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <form action="{{ url('admin/posts/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Update page</h3>
                    </div>
                </div>
                <div class="card-body">
                <div class="form-group">
                            <label for="">Category</label>
                            <select  name="category_id" class="form-control mt-2">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                            {{ $post->category_id == $category->id ? 'selected' : '' }}
                            >{{ $category->name }}</option>
                            @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                         <div class="mb-3 mt-4">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="formFile">
                        <img src="{{asset('storage/post-images/'.$post->image)}}" alt="" width="100px" class="mt-3" >
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{ old('title') ?? $post->title }}" class="form-control mt-2 @error('title') is-invalid @enderror" placeholder="Enter your title" id="">
                            @error('title')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Content</label>
                             <textarea name="content" id="" cols="30" rows="5" class="form-control mt-3 @error('content') is-invalid @enderror" placeholder="Message................">{{ old('content') ?? $post->content }}</textarea>
                            @error('content')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                </div>
                <div class="card-footer">
                     <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection