@extends('layouts.admin')


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

                    <meta http-equiv="refresh" content="0.2">
                      </div>
                      @endif
<!--....................................................................................................................................................-->




    <div class="panel-body">


                   <iframe src="demo_iframe.htm" name="iframe_a" height="100%" width="100%"></iframe>

                    <a href="https://unsplash.com/" target="iframe_a">W3Schools.com</a>
<!--....................................................................................................................................................-->
</div></div>
                </div>


            </div>
        </div>

 </div>





@endsection