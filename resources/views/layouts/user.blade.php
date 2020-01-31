<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">


        <!-- Styles -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/style-folio.css">
        <link rel="stylesheet" href="/css/dashboard.css">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>


        {{-- nav bar  --}}

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand logo" href="/">Mahbubur Rahman</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/#journal">BLOG</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ABOUT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/#about">Teaching Philosophy</a>
          <a class="dropdown-item" href="/resume">Resume</a>
          <a class="dropdown-item" href="/#portfolio">My Work</a>

        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Class Activity
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Class Lecture</a>
            <a class="dropdown-item" href="/notice">Notice</a>
            <a class="dropdown-item" href="/students">Student List</a>
            <a class="dropdown-item" href="#">Student Gallary</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/#contact">CONTACT</a>
      </li>

    </ul>
   <ul class="navbar-nav ml-auto">

            @if (Route::has('login'))
                    @auth
                    <li class="nav-item" >     <a href="{{ url('/home') }}">Dashboard</a> </li>
                    @else
                   <li class="nav-item" >       <a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                    <li class="nav-item" >        <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth

            @endif



   </ul>
    </div>
  </div>
</nav>

            @yield('content')





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="/js/lib/typed/typed.js"></script>
  <script src="/js/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/js/lib/jquery/jquery.min.js"></script>
  <script src="/js/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/js/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="/js/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/js/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>
</body>

</html>
