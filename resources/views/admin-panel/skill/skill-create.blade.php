@extends('admin-panel.master')

@section('contant')

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-7 offset-2">
                <h4>Skill Create Form</h4>
               <form action="{{ url('admin/skills') }}" method="POST">
                @csrf 

                <div class="form-group mt-4">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control mt-2 @error('name') is-invalid @enderror" placeholder="Enter your skill name">
                    @error('name')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label for="">Percent</label>
                    <input type="text" name="percent" class="form-control mt-2 @error('percent') is-invalid @enderror" placeholder="Enter Your skill percent">
                    @error('percent')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success mt-4">skill-create</button>
               </form>
            </div>
        </div>
    </div>
</div>

@endsection