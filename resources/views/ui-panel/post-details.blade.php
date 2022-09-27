@extends('ui-panel.ui-master')
<style>
  .comment-show img{
    border-radius: 50%;
  }
</style>
@section('contact')


   
              

                
                <div class="container">
                    <div class="row">
                     
                        <div class="col-md-12 post-details">
                            <img src="{{ asset('storage/post-images/'.$post->image) }}" alt="" style="width:500px; height:300px;">
                            <br><br>
                            <small> 
                                <strong> 
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    Posted On:
                                </strong>
                                  {{ date('d-M-Y',strtotime($post->created_at)) }}
                            </small>
                            <br>
                            <small>
                                <strong> 
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                    Written By:
                                </strong> 
                                Nay Aung (The Happy Coder)
                            </small>
                            <br>
                            <small>
                                <strong>
                                   <i class="fa fa-list"></i> Category:
                                </strong>
                                 {{ $post->category->name }}
                            </small>
                            <br><br>
                            <h5><strong>{{ $post->title }}</strong></h5>
                            <p style="text-align: justify;">
                               {{ $post->content }}
                            </p>
                            
                            <div>
                                <form action="" method="POST">
                                  @csrf
                                  <div>
                                    <span class="mb-2 mr-5"><small>{{ $like->count() }} like</small></span>
                                    <span class="mb-2 mr-5"><small>{{ $dislike->count() }} dislike</small></span>
                                    <span><small>{{ count($comments) }} comment</small></span>
                                  </div>
                                <button  formaction="{{ url('/post/like/'.$post->id) }}" class="btn btn-sm btn-success like ml-2"
                                @if($likeStatus)
                                        @if($likeStatus->type == 'like')
                                        disabled
                                        @endif
                                @endif
                                >
                                    <i class="far fa-thumbs-up"></i>
                                    Like
                                   
                                </button>
                                <button  formaction="{{ url('/post/dislike/'.$post->id) }}" class="btn btn-sm btn-danger like ml-4"
                                @if($likeStatus)
                                        @if($likeStatus->type == 'dislike')
                                        disabled
                                        @endif
                                 @endif
                                >
                                  <i class="far fa-thumbs-down"></i>
                                    dislike
                                   
                                </button>
                                <button type="button" class="btn btn-sm btn-info comment ml-5" data-toggle="collapse" data-target="#collapseExample">
                                    <i class="far fa-comment"></i> Comment 
                                </button>
                                </form>
                            </div>
                            <br>
                            <div class="comment-form">
                                <div class="collapse" id="collapseExample">
                                    <form action="{{ url('/post/comment/'.$post->id) }}" method="POST">
                                      @csrf
                                        <div class="form-group">
                                            <textarea name="text" id="" cols="30" placeholder="Enter your comment..." required rows="3"></textarea>
                                            <br>
                                            <button class="btn btn-primary btn-sm mt-2">
                                                <i class="far fa-paper-plane"></i> Submit
                                            </button>
                                        </div>
                                    </form>
                                    <br>
                                    @foreach($comments as $comment)
                                    <div class="comment-show mt-3">
                                        <img src="{{ asset('images/design-1.avif') }}" alt="" width="30px">
                                        {{ $comment->user->name }}
                                        <div class=" comment-box mt-2 form-control" size="30">
                                        <i class="bi bi-person-hearts"></i>  {{ $comment->text }}
                                        </div>
                                    </div>
                                    @endforeach
                                    <br>
                                  
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>

 @endsection    

  <!-- BOOTSTRAP JS  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
    </body>
    </html>
                  