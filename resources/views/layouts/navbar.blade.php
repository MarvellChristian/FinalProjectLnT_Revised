<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="uil uil-shop me-2"></i>PT. Musang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Purchase</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
          </li>
          @else
          
            @if (Auth::user()->role == 'Admin')
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/category') }}">Manage Categories</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/item') }}">Manage Items</a>
              </li>
            @endif
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                  <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                  <form id="logout-form" action="{{url('/logout')}}" method="POST">
                    @csrf
                  </form>
                </li>
              </ul>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>