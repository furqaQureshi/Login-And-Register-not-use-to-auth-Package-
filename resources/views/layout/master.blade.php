<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            @if (!Route::has('login'))
              @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ url('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            @endauth
          @endif
          @if(!Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{ url('login') }}"> Login
            </a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('register') }}">Register</a>
          </li>
          @endif
          </ul>
          @if (!Route::has('login'))
              @auth
              <form class="form-inline my-2 my-lg-0">
                  <a href="{{ route('logout') }}" class="btn btn-success my-2 my-sm-0" type="submit">Logout</a>
              </form>
              @endauth
          @endif
        </div>
      </nav>
      @yield('navigation')
  </body>
</html>