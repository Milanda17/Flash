<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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

                background: url('https://images.unsplash.com/photo-1504610926078-a1611febcad3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e1c8fe0c9197d66232511525bfd1cc82&auto=format&fit=crop&w=1400&q=80');
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

         table { table-layout: fixed; }
         table td { overflow: hidden; }

         #imaginary_container{
             margin-top:0%;
             margin-bottom:10%;
         }
         .stylish-input-group .input-group-addon{
             background: white !important;
         }
         .stylish-input-group .form-control{
         	border-right:0;
         	box-shadow:0 0 0;
         	border-color:#ccc;
         }
         .stylish-input-group button{
             border:0;
             background:transparent;
         }


         .sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 85px;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 80px;
    opacity: 0.6;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 80px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

.sidenavRight{
height: 100%;
width: 320px;
position: fixed;
z-index: 1;
top: 85px;
left: 1050px;
background-color: #111;
overflow-x: hidden;
padding-top: 80px;
opacity: 0.6;
}

.sidenavRight a {
padding: 6px 8px 6px 16px;
text-decoration: none;
font-size: 20px;
color: #818181;
display: block;
}

    </style>


</head>



<body>

<!--<video autoplay loop id="video-background" muted plays-inline>
                  <source src="video/busy.mp4" type="video/mp4">
                </video> -->


    <div id="app">

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="">

                    <img src="images/logo.png" height="50px" width="150px">

                    </a>
                    <a>
                      <p>&nbsp;</p>
                    </a>
                </div>



               <div class="collapse navbar-collapse" id="app-navbar-collapse">





                    <!-- Right Side Of Navbar -->

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                                </a>
 <!--.........................................................................................................-->

                               <!-- Right side dropdown menu -->


                                <ul class="dropdown-menu" role="menu">


                                     <li>
                                        <a href="/changePassword"><button type="button" class="btn btn-info btn-md  btn-xs" >Change Password</button></a>
                                    </li>

                                     <li>
                                        <a><button type="button" class="btn btn-info btn-md  btn-xs" data-toggle="modal" data-target="#edit_form">Edit Account</button></a>
                                    </li>

                                    <li>

                                        <a><button type="button" class="btn btn-danger btn-xs" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">Logout</button></a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>

                                </ul>

 <!--.........................................................................................................-->
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>




                 <div class="sidenav">


                                 <a href="manager_home" >Compose</a>
                                  <a href="manager_inbox">Inbox</a>
                                  <a href="manager_project_inbox">Project Inbox</a>
                                  <a href="manager_sent">Sent Mail</a>
                                  <a href="manager_draft">Drafts</a>
                                  <a href="manager_project">Projects</a>
                                  <a href="manager_add_employee">Employees</a>
                                  <a href="view_feedback" >View Feedback</a>



                         </div>
                     </nav>



                        <!--Change password -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}





                        <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                            <label for="current_password" class="col-md-4 control-label">Current Password</label>

                            <div class="col-md-6">
                                <input id="current_password" type="current_password" class="form-control" name="current_password" required>

                                @if ($errors->has('current_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>

      </div>

    </div>
  </div>

</div>




 <!--.........................................................................................................-->



     <!-- Edit Account -->

<div class="modal fade" id="edit_form" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Details</h4>
        </div>
        <div class="modal-body">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/update_me">
                        {{ csrf_field() }}

                          <input id="id" type="hidden" class="form-control" name="id" value="{{ Auth::user()->id }}">


                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('tele_no') ? ' has-error' : '' }}">
                            <label for="tele_no" class="col-md-4 control-label">Telephone No</label>

                            <div class="col-md-6">
                                <input id="tele_no" type="text" class="form-control" name="tele_no" value="{{ Auth::user()->tele_no }}" required autofocus>

                                @if ($errors->has('tele_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tele_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <select class="form-control" id="gender"  value="{{ Auth::user()->gender }}" name="gender" required autofocus>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                      <option value="other">Other</option>

                                </select>

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="Date" class="form-control" name="dob" value="{{ Auth::user()->dob }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
      </div>

    </div>
  </div>

</div>

<!--.........................................................................................................-->
        @yield('content')



</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
