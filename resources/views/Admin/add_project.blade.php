@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
          @if(session()->has('message'))

          <div class="alert alert-success">
            <center>
              {{session()->get('message')}}
            </center>

        <meta http-equiv="refresh" content="0.5">
          </div>
          @endif

                  <nav class="navbar navbar-inverse navbar">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand">Project</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="add_project">Add</a></li>

                      <li><a href="view_project">View</a></li>

                    </ul>
                  </div>
              </nav>



            <div class="panel panel-default">

                <div class="panel-heading"><h4><b>Add Project</b></h4></div>

                <div class="panel-body">


<!--....................................................................................................................................................-->

                    <form class="form-horizontal" method="POST" action="/store_project">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">
                            <label for="project_name" class="col-md-4 control-label">Project Name</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" value="{{ old('project_name') }}" required autofocus>

                                @if ($errors->has('project_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('client_name') ? ' has-error' : '' }}">
                            <label for="client_name" class="col-md-4 control-label">Client Name</label>

                            <div class="col-md-6">
                                <input id="client_name" type="text" class="form-control" name="client_name" value="{{ old('client_name') }}" required autofocus>

                                @if ($errors->has('client_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('client_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('client_email') ? ' has-error' : '' }}">
                            <label for="client_email" class="col-md-4 control-label">Client E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="client_email" type="email" class="form-control" name="client_email" value="{{ old('client_email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('manager_id') ? ' has-error' : '' }}">
                            <label for="manager_id" class="col-md-4 control-label">Manager Email</label>

                            <div class="col-md-6">
                                <input id="manager_id" type="email" class="form-control" name="manager_id" value="{{ old('manager_id') }}" required autofocus>

                                @if ($errors->has('manager_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('manager_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('discription') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Discription</label>

                            <div class="col-md-6">
                              <textarea rows="4" cols="50" class="form-control" name="discription" id="description" value="{{ old('discription') }}" required >
                              </textarea>

                                @if ($errors->has('discription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('discription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>s



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>

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
