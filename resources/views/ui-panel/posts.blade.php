@extends('ui-panel.ui-master')
@section('contact')
             

                
                <div class="container">
                   <div class="col-md-12">
                   <div class="row">
                        <div class="col-md-8">
                          @foreach($posts as $post)
                          
                                <div class="post">
                                <img src="{{ asset('storage/post-images/'.$post->image) }}" style="border:1px solid gray; height:400px;" alt="" >
                                    <br><br>
                                        <h5><strong>{{ $post->title }}</strong></h5>
                                    <br>
                                    <p>
                                        {{ substr($post->content,0,300) }}
                                    </p>
                                    <a href="{{ url('posts/'.$post->id.'/details') }}">
                                        <button class="btn btn-info">See More <i class="fas fa-angle-double-right"></i> </button>
                                    </a>
                                </div>
                              
                               @endforeach
                              
                           
                        </div>
                        <div class="col-md-4">
                            <div class="siderbar">
                                <form action="{{ url('/search_posts') }}" method="GET">
                                    @csrf
                                      <div class="input-group">
                                          <input type="text" name="data" class="form-control" placeholder="Search.....">
                                          <button type="submit" class="btn btn-success">
                                              Submit 
                                          </button>
                                      </div>
                                </form>
                                <hr>
                                <h5>Categories</h5>
                                <ul>
                                @foreach($categories as $category)
                                <li>
                                     <a href="{{ url('/category_data/'.$category->id) }}">{{ $category->name }}</a> 
                                </li>
                                @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>

      
              @endsection