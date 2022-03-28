<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('image/assets/logo.png')}}" alt="" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        @if(Auth::check())
        @if(Auth::user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            logged as admin
          </a>
        </li>
        @endif
        @endif
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li> -->
        <li class="nav-item dropdown">
          @if(Auth::check())
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Action Link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/logout">logout as {{Auth::user()->name}}</a></li>
            @if(Auth::user()->role == 'admin')
            <li><a class="dropdown-item" href="/panel">Admin Panel</a></li>
            @endif
            <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>