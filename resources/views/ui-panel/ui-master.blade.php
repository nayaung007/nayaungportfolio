<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nay Aung</title>
     <!-- Bootstrap min.css -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap-min.css') }}">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- w3school awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- CUSTOM CSS  -->
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
      
<!-- NAVBAR SEXTION -->


<nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="bi bi-border-width" id="btn"></i>
            <i class="bi bi-x-lg" id="cancel"></i>
        </label>
        <i class="bi bi-apple" id="icon"></i>
       <ul>
        
       <li><a href="{{ url('/') }}">HOME</a></li> 
      <li><a href="{{ url('/posts') }}">BLOGS</a></li> 
 @if(Auth::check())
       <li>
       <a href="{{ url('/register') }}" class="float-right">
       {{ Auth::user()->name}}</a>
       </li>
      <li>
      <a  href="" class="float-right"
         onclick="event.preventDefault();
        if(confirm('Are you sure you want to logout')){document.getElementById('logout-form').submit()}"
       >Logout
       </a>
      </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
       @csrf
     </form>
 @else
       <li><a href="{{ url('/register') }}" class="float-right">REGISTER</a></li>
       <li><a href="{{ url('/login') }}" class="float-right" >LOGIN</a></li>
              
@endif
       </ul>
      
    </nav>
        <!-- header -->
        <header>
        <section>
         
                <div class="container-header">
                     
                    <div class="header-text">
                        <h1>I am <span class="auto-input"></span></h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br> Porro sed voluptatem incidunt,  </p>
                        <a href="" class="btn btn-outline-success" onclick="alert('Please Call Me +959454238579')">content me</a>
                        <a href="" class="cv-form" onclick="alert('ARE YOU SURE TO SEE MY CV FORM')">Download CV</a>
                    </div>  
                    <div class="header-profile">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                </div>
        </section>
    </header>
    <!-- header -->


   <div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('contact')
        </div>
    </div>
   </div>
   <section class="section-footer">
<div class="container-footer">
   <div class="footer-me">
    <h4>About me</h4>
    <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Earum aperiam <br>maiores corporis beatae consequuntur nam.<br>
        Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Earum aperiam <br>maiores corporis beatae consequuntur nam.<br></p>
   </div>
   <div class="footer-location">
    <h4>Location me</h4>
    <i class="bi bi-geo-alt-fill bg-danger"></i><span class="social">No.21, Htuu pr Yone 5-street<br><span class="town">Tarkayta Township,Yangon!</span></span><br><br>
    <i class="bi bi-phone-fill bg-primary"></i><span class="social">+959454238579</span><br><br>
    <i class="bi bi-chat-dots-fill bg-success"></i><span class="social">contact me message</span>
   </div>
   <div class="contact-us">
    <h4>Contact us</h4>
     <div class="logo-1">
        <i class="bi bi-facebook bg-primary"></i><span class="social">Facebook</span><br></br>
        <i class="bi bi-google bg-warning"></i><span class="social">Google</span><br></br>
        <i class="bi bi-instagram bg-secondary"></i><span class="social">Instagram</span><br></br>
        <i class="bi bi-youtube bg-danger"></i><span class="social">Youtube</span>
     </div>
     
   </div>
</div>

<div class="container-sign">
    <div class="sign">
        <p><span class="footer-text">@2022 </span>Many Project Create,All Right Reverse</p>
    </div>
    <div class="footer-image">
        <img src="{{ asset('images/computer.avif') }}" alt="">
    </div>
    <div class="team-service">
        <p>Team of service,Pravicy Policy. Site map<span>
            <select id="language" name="language">
                <option value="english">English</option>
                <option value="myanmar">Myanmar</option>
            </select>
            </span>
        </p>
        <div class="present-text">
            <p>Present by<span class="footer-text">  <i class="bi bi-google"></i>oogle</span> translation</p>
        </div>
          <div class="click">
            <a href="#"><i class="bi bi-arrow-up-circle-fill"></i></a>
          </div>
          
    </div>
</div>
</section>

   
    <script src="js/main.js"></script>

        <!-- Type js -->
        <script src="{{ asset('js/cdn-net.js') }}"></script>
    <script>
     var typed = new Typed('.auto-input', {
        strings: ["Nay Aung","Web Developer","Backend Developer","Frontend Developer"],
        typeSpeed:100,
        backSpeed:100,
        loop:true
     });
    </script>
  
    <!-- slider js -->
    <!-- BOOTSTRAP JS  -->
   <script src="{{ asset('js/bootstrap-bundle.js') }}"></script>
</body>
</html>