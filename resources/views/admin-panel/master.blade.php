<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titl></title>
    <!-- Bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-min.css') }}">
<style>
    nav{
        padding: 8px;
    }
    .nav-text{
        justify-content: flex-end;
        color: white;
        float: right;
        position: fixed;
        right: 0;
        
    }
    .sidenav{
        display: block;
        background-color: black;
        padding: 20px;
        height: 100%;
        width: 190px;
        position: fixed;
        left: 0;
        padding-top: 65px;
        
    }
    .sidenav a{
        display: block;
       
        color: white;
        text-decoration: none;
        padding: 20px;
        text-align: center;
        border-bottom: 1px solid gray;
    }
    .main{
        margin-left: 170px;
        padding: 70px 10px;
    }
</style>
</head>
<body>
    <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
            <!-- navbar -->
        <nav class="bg-dark fixed-top">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="{{ url('/') }}">PersonalBlog</a>
                </li>
                <li class="nav-item dropdown ml-auto">
                    <a class="nav-link dropdown-toggle nav-text" data-bs-toggle="dropdown"   href="#" role="button" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                     <ul class="dropdown-menu">
                     
                     <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                     @csrf
                     <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want logout')">logout</button>
                    </form>
                      
                    </ul>
                </li>
             </ul>
        </nav>
        <!-- sidenav -->
        <div class="sidenav">
            <a href="{{ url('admin/dashboard') }}">Dashboard</a>
            <a href="{{ url('admin/users') }}">Users</a>
            <a href="{{ url('admin/skills') }}">Skills</a>
            <a href="{{ url('admin/projects') }}">Projects</a>
            <a href="{{ url('admin/students') }}">Students</a>
            <a href="{{ url('admin/categories') }}">Category</a>
            <a href="{{ url('admin/posts') }}">Post</a>
            
        </div>    
             <!--main content  -->
             <div class="main">
              @yield('contant')
             </div>
        </div>
       </div>

    </div>



    <!-- JavaScript Bundle with Popper -->
  <script src="{{ asset('js/bootstrap-bundle.js') }}"></script>
</body>
</html>