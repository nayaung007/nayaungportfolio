
@extends('ui-panel.ui-master')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

@section('contact')
 
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- ABOUT ME & SKILLS SECTION-->  
                    <div class="aboutme">
                      <div class="row">
                        <div class="col-md-5">
                          <br>
                          <h3 class="design-text-color">ABOUT ME</h3>
                          <br>
                          <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugiat soluta consectetur reprehenderit facere, quis error quidem harum quam laborum inventore quasi minima ipsum asperiores laboriosam ipsa enim dolor perferendis.
                          </p>
                          <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugiat soluta consectetur reprehenderit facere, quis error quidem harum quam laborum inventore quasi minima ipsum asperiores laboriosam ipsa enim dolor perferendis.
                          </p>
                          <div class="row">
                            <div class="col-md-6 mb-2">
                              <div class="total-project">
                              <i class="bi bi-laptop-fill"></i>
                                 <br>
                                <strong>{{ count($projects) }}</strong>
                                <p class="text-center">Total Projects</p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="total-student">
                              <i class="bi bi-people-fill"></i>
                                <br>
                                <strong>{{ count($students) }}</strong>                               
                                <p class="text-center">Total Students</p>
                              </div>
                            </div>
                          </div>
                        </div>  
                        <div class="col-md-7">
                          <br>
                          <h4 class="design-text-color">MY SKILLS</h4>
                          <br>
                          @foreach($skills as $skill)
                          <div class="row">
                            <div class="col-md-9">
                                <div class="progress mt-2" style=" border: 1px solid gray;">
                                  <div class="progress-bar" style ="width: {{ $skill->percent }} " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    {{ $skill->percent }} 
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                               {{ $skill->name }}
                            </div>                            
                          </div>
                         @endforeach
                        
                        </div>
                      </div>
                    </div>

                    <br><br><br>

                    <!-- MY PROJECTS SECTION -->
                    <h2 class="design-text-color">MY PROJECTS</h2><br>
                    <div class="row">
                      <div class="col-md-7 mb-2 project-image">
                         <img src="{{ asset('images/computer.avif') }}" alt="">
                      </div>

                      <div class="col-md-5">
                      @foreach($projects as $project)
                        <div class="col-sm-6 col-md-4 mb-2 project-header">
                        <a href="{{ $project->url }}" target="_blank">
                        <i class="bi bi-cursor-fill"></i>
                          <div class="project-text">
                          {{ $project->name }}
                          </div>
                        </a>
                        </div>
                        @endforeach
                      </div>
                      

                        </div>
                      
                      
                    


                        

                    <br><br><br>


                    <!-- LATEST POSTS SECTION  -->
                    <h2 class="design-text-color">LATEST POSTS FROM BLOGS</h2><br>
                    <p class="text-center">
                      Hey Guys! I warmly welcome you to read some of my blog posts. Here are very interesting and exciting posts you can read that i am supporting for you guys!
                    </p>
                    <div class="row">
                     @foreach($posts as $post)
                     <div class="col-sm-6 col-md-4">
                         
                              <div class="latest-post mb-2">
                              <a href="{{ url('/posts/'.$post->id.'/details') }}">
                                 <img src="{{ asset('storage/post-images/'.$post->image) }}" alt="">
                                <small>{{ date('d-M-Y',strtotime($post->created_at)) }}</small>
                                <p><strong>{{ $post->title }}</strong></p>
                                <P>
                                  {{ substr($post->content,0,300) }}
                                </P>
                                </a>
                              </div>
                         
                      </div>
                     @endforeach
                      
                    </div>
                        </div>
                    </div>
                </div>
                    <!-- portfolio Gallery -->
    <section id="portfolio">
        <div class="text-header">
            <h2 class="design-text-color mt-3">PORTFOLIO GALLERY</h2>
          </div>
     
        <div class="container-gallery">
            <div class="menu-gallery mb-3">
                <a href="#" class="btn btn-success" data-filter="all">All</a>
                <a href="#" class="btn btn-success" data-filter="code">Code</a>
                <a href="#" class="btn btn-success mt-2" data-filter="design">Design</a>
                <a href="#" class="btn btn-success mt-2" data-filter="graphic">Graphic</a>
             </div>
             <div class="box" id="store-items">
    
                    <div class="store-item code">
                        <img src="{{ asset('images/code-1.jpg') }}" alt="" class="img-1">
                    </div>
                    <div class="store-item code">
                        <img src="{{ asset('images/code-2.jpg') }}" alt="" class="img-1">
                    </div>
                    <div class="store-item code">
                        <img src="{{ asset('images/code-3.avif') }}" alt="" class="img-1">
                    </div>
                    <div class="store-item design">
                        <img src="{{ asset('images/design-1.avif') }}" alt="" class="img-1">
                    </div>
                    <div class="store-item design">
                        <img src="{{ asset('images/design-2.avif') }}" alt="" class="img-1">
                    </div>
                    <div class="store-item design">
                        <img src="{{ asset('images/design-3.avif') }}" alt="" class="img-1">
                    </div>
                    
                    
                    <div class="store-item graphic">
                        <img src="{{ asset('images/graphic-1.avif') }}" alt="" class="img-1">
                    </div>
                    <div class="store-item graphic">
                        <img src="{{ asset('images/graphic-2.avif') }}" alt="" class="img-1">
                    </div>
                    <div class="store-item graphic">
                        <img src="{{ asset('images/graphic-3.avif') }}" alt="" class="img-1">
                    </div>
                  
    
             </div>
        </div>
    </section>
    <!-- Gallery -->
        <!-- slider -->
<section class="container-community">
    <h1 class="white-text mb-5">MY COMMUNITY</h1>
    <div class="container-slider">
        <div class="card-slider">
            <div class="layer-1">
                <img src="{{ asset('images/code-1.jpg') }}">
            </div>
            <div class="content">
                <h3>Nay Gyi</h3>
                <p>FRONTEND Design</p>
            </div>
            <div class="layer-2"></div>
            <div class="layer-3"></div>
        </div>
        <div class="card-slider">
            <div class="layer-1">
                <img src="{{ asset('images/code-3.avif') }}">
            </div>
            <div class="content">
                <h3>Aung Gyi</h3>
                <p>BACKEND Design</p>
            </div>
            <div class="layer-2"></div>
            <div class="layer-3"></div>
        </div>
        <div class="card-slider">
            <div class="layer-1">
                <img src="{{ asset('images/code-2.jpg') }}">
            </div>
            <div class="content">
                <h3>Aye Aye</h3>
                <p>UI/UX Design</p>
            </div>
            <div class="layer-2"></div>
            <div class="layer-3"></div>
        </div>
    </div>    
</section> 

<section>
<div class="google-map">
    <h2 class="white-text">CAN YOU FIND YOUR LOCATION!!</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477.4420629022251!2d96.20440216326392!3d16.79972009607382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed210a202d45%3A0x7aac2c2c362f144f!2sPMG%2020%20Liter%20Agent%20(Tharketa)!5e0!3m2!1sen!2smm!4v1659807121089!5m2!1sen!2smm" width="70%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
</section>


 
    <script src="{{ asset('js/slider.js') }}"></script>

          
              @endsection



