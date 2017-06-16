<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href='{{asset("dist/css/main.css")}}'>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="#">Note App</a><ul class="nav navbar-nav navbar-right">


                  
                
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        </ul>
                </div>
                      
                        <!-- Authentication Links -->
                        </nav>

               
       
        <!-- /navbar -->
        <!-- Main component for call to action -->
       @yield('content')
    </div>
    <!-- /container -->

    <script src="{{asset('dist/js/jquery3.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.js')}}"></script>
      <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>