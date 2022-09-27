@extends('admin-panel.master')
@section('contant')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="card">
            <div class="card-header">
                <div class="card-title">
                   <h3>comment</h3>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                @if(session('successMessage'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>{{ (session('successMessage')) }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                 @endif
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $index => $comment)
                        <tr>
                              <td>{{ $index + 1 }}</td>
                            <td>{{ $comment->text }}</td>
                            <td>
                                <form action="{{ url('admin/comment/'.$comment->id.'/show_hide') }}" method="POST">
                                    @csrf
                                    @if($comment->status == 'show')
                                    <button type="submit" class="btn btn-outline-success"><i class="bi bi-eye-fill"></i> Show</button>
                                    @else
                                    <button type="submit" class="btn btn-outline-danger"><i class="bi bi-h-circle"></i> Hide</button>
                                    @endif
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