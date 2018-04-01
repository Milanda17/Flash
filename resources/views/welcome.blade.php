<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <script>setTimeout(function(){window.location.href='login'},2000);</script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><b>Login</b></a>
                        <a href="{{ route('register') }}"><b>Register</b></a>
                    @endauth
                </div>
            @endif
             <video autoplay loop id="video-background"  muted plays-inline>
                  <source src="video/Office.mp4" type="video/mp4">
                </video>

            <div class="content">

                   <img src="images/logo.png">



        </div>
      </div>
    </body>
</html>
