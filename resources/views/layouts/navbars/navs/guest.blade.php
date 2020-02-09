 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand logo" href="/"><img src="/images/npi.png" height="100"></a>
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
          <a class="dropdown-item" target="_blank" href="/resume">Resume</a>
          <a class="dropdown-item" href="/#portfolio">My Work</a>

        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Class Activity
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/lecture">Class Lecture</a>
            <a class="dropdown-item" href="/notice">Notice</a>
            <a class="dropdown-item" href="/student">Student List</a>
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
                        @endif
                    @endauth

            @endif



   </ul>
    </div>
  </div>
</nav>
