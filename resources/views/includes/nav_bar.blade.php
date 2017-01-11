
<style>
  .navbar-brand {
   z-index 200;
    }
    
    .navbar {
 z-index: 199;
    }
</style>
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ secure_url('/') }}">
        <img alt="Navbar logo" src="{{ secure_asset('images/Navbar.png') }}">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="gotime">Go Time!</a></li>
        <li><a href="myProgress">My Progress</a></li>
        <li><a href="help">Help</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ secure_url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              </ul>
          </li>
        @else
          <a href="{{ secure_url('/login') }}" class="btn btn-warning navbar-btn"><i class="fa fa-btn fa-sign-in"></i> Login</a>
          <a href="{{ secure_url('/register') }}" class="btn btn-default navbar-btn"><i class="fa fa-btn fa-user"></i> Register</a>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>