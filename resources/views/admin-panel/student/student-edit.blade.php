@extends('admin-panel.master')
@section('contant')

<div class="col-md-12">
    <div class="row">
       <form action="{{ url('admin/students/'.$student->id) }}" method="POST">
        @csrf  
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Student-Create</h3>
                </div>
            </div>
            <div class="card-body">
                 <div>
                    <label for="">Count</label>
                    <input type="text" name="count" value="{{ $student->count }}" class="form-control mt-2 @error('count')is-invalid @enderror" placeholder="Enter your count">
                    @error('count')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                 </div>
            </div>
            <div class="card-footer">
                  <a href=""><button class="btn btn-success">update</button></a>
            </div>
        </div>
       </form>
    </div>
</div>


@endsection