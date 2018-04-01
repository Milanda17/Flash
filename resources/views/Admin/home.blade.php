@extends('layouts.app')


@section('content')

<div id="page">
       <div id="page">
 <!-- ####################################################################################################### -->


            <div id="body" class="contact">

            <div class="header">

            </div>

            <div class="footer">

                 </div>


                <div class="contact">


                    <div class="col-md-9 col-md-offset-2">

                      @if(session()->has('message'))

                      <div class="alert alert-success">
                        <center>
                          {{session()->get('message')}}
                        </center>

                    <meta http-equiv="refresh" content="2">
                      </div>
                      @endif
<!--....................................................................................................................................................-->


<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Home</a>
    </div>

    <div class="collapse navbar-collapse js-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee records <span class="caret"></span></a>
                <ul class="dropdown-menu mega-dropdown-menu">

                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Leave requests</li>
                            <li><a href="/approved">Approved</a></li>
                            <li><a href="/rejected">Rejected</a></li>
                            <li><a href="/pending">Pending</a></li>

                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Employees</li>
                            <li><a href="/emp">Employee Profiles</a></li>

                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Attendance records</li>

                            <li><a href="/attrecords">Invalid records</a></li>

                        </ul>
                    </li>
                </ul>
            </li>



            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects<span class="caret"></span></a>
                <ul class="dropdown-menu mega-dropdown-menu">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header"></li>
                            <li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
                            <li><a href="#">Four Columns Grid</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
                            <li><a href="#">Google Fonts</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Plus</li>
                            <li><a href="#">Navbar Inverse</a></li>
                            <li><a href="#">Pull Right Elements</a></li>
                            <li><a href="#">Coloured Headers</a></li>
                            <li><a href="#">Primary Buttons & Default</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
                            <li><a href="#">Calls to action</a></li>
                            <li><a href="#">Custom Fonts</a></li>
                            <li><a href="#">Slide down on Hover</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

        </ul>



        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">E-mails</a></li>
            <li><a href="/setting">Settings</a></li>
            <li class="divider"></li>
            <li><a href="/">Log Out</a></li>
          </ul>
        </li>
        <li><a href="#">Notifications</a>
        </li>
      </ul>
    </div><!-- /.nav-collapse -->
  </nav>
<!--....................................................................................................................................................-->

                </div>


            </div>
        </div>


 </div>





@endsection
