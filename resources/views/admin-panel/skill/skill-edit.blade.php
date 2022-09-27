@extends('admin-panel.master')

@section('contant')

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                        <h4>Skill Update Form</h4>
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('admin/skills/'.$skill->id)  }}" method="POST">
                @csrf 
                @method('PUT')
        

                <div class="form-group mt-4">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $skill->name }}" class="form-control mt-2 @error('name') is-invalid @enderror" placeholder="Enter your skill name">
                    @error('name')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label for="">Percent</label>
                    <input type="text" name="percent" value="{{ $skill->percent }}" class="form-control mt-2 @error('percent') is-invalid @enderror" placeholder="Enter Your skill percent">
                    @error('percent')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-success mt-2">skill-update</button>
               </form>
                    </div>
                </div>
               
                
              
            </div>
        </div>
    </div>
</div>

@endsection