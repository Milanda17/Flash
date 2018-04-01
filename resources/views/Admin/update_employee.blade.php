@extends('layouts.admin1')

@section('content')
<div class="container">

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        @if(session()->has('message'))

        <div class="alert alert-success">
          <center>
            {{session()->get('message')}}
          </center>

      <meta http-equiv="refresh" content="2">
        </div>
        @endif
            <div class="panel panel-default">

                <div class="panel-heading"><h4><b>Update Employee Details</b></h4></div>

                <div class="panel-body">

<!--....................................................................................................................................................-->

                    <form class="form-horizontal" method="POST" action="/update_employee">
                        {{ csrf_field() }}


  <?php foreach ($read as $data){?>
                  <input id="id" type="hidden" class="form-control" name="id" value="<?php echo $data->id ?>">

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="<?php echo $data->first_name ?>" required autofocus>

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
                                <input id="last_name" type="text" class="form-control" name="last_name" value="<?php echo $data->last_name ?>" required autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo $data->email ?>" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('account_type') ? ' has-error' : '' }}">
                            <label for="account_type" class="col-md-4 control-label">Account Type</label>

                            <div class="col-md-6">
                                <select class="form-control" id="account_type"  value="" name="account_type" required autofocus>
                                      <option value="employee">Employee</option>
                                      <option value="manager">Manager</option>
                                      <option value="admin">Admin</option>

                                </select>

                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('tele_no') ? ' has-error' : '' }}">
                            <label for="tele_no" class="col-md-4 control-label">Telephone No</label>

                            <div class="col-md-6">
                                <input id="tele_no" type="text" class="form-control" name="tele_no" value="<?php echo $data->tele_no ?>" required autofocus>

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
                                <select class="form-control" id="gender"  value="<?php echo $data->gender ?>" name="gender" required autofocus>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                      <option value="other">Other</option>

                                </select>

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="Date" class="form-control" name="dob" value="<?php echo $data->dob ?>" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<?php }?>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            <a href="/view_employee"><button type="button" class="btn btn-success btn-s ">Back</button></a>
                            </div>
                        </div>
                    </form>

<!--....................................................................................................................................................-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
