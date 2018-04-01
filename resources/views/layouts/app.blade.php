<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">

                    body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

                background: url('video/Office.mp4');
                  background-attachment: fixed;
                  background-size: cover;
            }
            #video-background {
/*  making the video fullscreen  */
          position: fixed;
          right: 0;
          bottom: 0;
          min-width: 100%;
          min-height: 100%;
          width: auto;
          height: auto;
          z-index: -100;
          transition: 1s opacity;


        }
    </style>


</head>
<body>
<video autoplay loop id="video-background" muted plays-inline>
                  <source src="video/Office.mp4" type="video/mp4">
                </video>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">



                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('../') }}">

                    <img src="images/logo.png" height="50px" width="150px">

                    </a>
                    <a>
                      <p>&nbsp;</p>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>




                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}"><b>Login</b></a></li>
                            <li><a href="{{ route('register') }}"><b>Register</b></a></li>
                        @else

                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu" role="menu">


                                     <li>
                            
                                    </li>

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

                        @endguest
                    </ul>
                </div>
            </div></nav>
        </div>

        @yield('content')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
