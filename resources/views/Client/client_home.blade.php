@extends('layouts.client')

@section('content')

<div id="page">

 <!-- ####################################################################################################### -->

            <div id="body" class="contact">
            <div class="header">
            </div>

            <div class="footer">



<div class="col-md-7 col-md-offset-2">
  <div class="panel panel-default">

    <div class="contact">

      @if(session()->has('message'))

      <div class="alert alert-success">
        <center>
          {{session()->get('message')}}
        </center>

    <meta http-equiv="refresh" content="2">
      </div>
      @endif

    <div class="panel-body">




                <form class="form-horizontal" method="POST" action="/mail_register" enctype="multipart/form-data">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('to') ? ' has-error' : '' }}">
                            <label for="to" class="col-md-4 control-label"><font color="black">To</font></label>

                            <div class="col-md-6">
                                <input id="to" type="email" class="form-control" name="to" value="{{ old('to') }}" required autofocus placeholder="To">

                                @if ($errors->has('to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('to') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject" class="col-md-4 control-label"><font color="black">Subject</font></label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" required placeholder="Subject">


                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">
                            <label for="project_name" class="col-md-4 control-label"><font color="black">Project Name</font></label>

                            <div class="col-md-6">
                                <select class="form-control" id="project_name"  name="project_name" >
                                  <?php foreach ($read as $data){?>
                                        <?php if ( $data->client_email==Auth::user()->email){ ?>

                                      <option value="<?php echo $data->project_name ?>"><?php echo $data->project_name ?></option>
                                    <?php } ?>
                                    <?php } ?>


                                </select>

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label"></label>

                            <div class="col-md-6">

                              <textarea rows="4" cols="50" class="form-control" name="description" id="description" value="{{ old('description') }}" required >
                              </textarea>


                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label"></label>

                            <div class="col-md-6">

                              <input id="attachment" type="file" class="form-control" name="attachment" accept="image/*" >

                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary" name="submit_button" value="sent">
                                    Send
                                </button>
                                <button type="submit" class="btn btn-success" name="submit_button" value-"save">
                                   Save
                                </button>
                            </div>
                        </div>




                    </form>



                </div>


            </div>
        </div>

 </div>





@endsection
