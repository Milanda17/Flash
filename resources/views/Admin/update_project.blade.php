@extends('layouts.admin1')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading"><h4><b>Update Project</b></h4></div>

                <div class="panel-body">


<!--....................................................................................................................................................-->
                    <form class="form-horizontal" method="POST" action="/update_project">
                        {{ csrf_field() }}


  <?php foreach ($read as $data){?>

                <input id="Pid" type="hidden" class="form-control" name="Pid" value="<?php echo $data->Pid ?>" >


                        <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">
                            <label for="project_name" class="col-md-4 control-label">Project Name</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" value="<?php echo $data->project_name ?>" required autofocus>

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
                                <input id="client_name" type="text" class="form-control" name="client_name" value="<?php echo $data->client_name ?>"  placeholder="" required autofocus>

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
                                <input id="client_email" type="email" class="form-control" name="client_email" value="<?php echo $data->client_email ?>" required>

                                @if ($errors->has('client_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('client_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('manager_email') ? ' has-error' : '' }}">
                            <label for="manager_email" class="col-md-4 control-label">Manager Email</label>

                            <div class="col-md-6">
                                <input id="manager_email" type="text" class="form-control" name="manager_email" value="<?php echo $data->manager_email ?>" required autofocus>

                                @if ($errors->has('manager_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('manager_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('employee_email1') ? ' has-error' : '' }}">
                            <label for="employee_id" class="col-md-4 control-label">Employee Email1</label>

                            <div class="col-md-6">
                                  <input id="employee_email1" type="text" class="form-control" name="employee_email1" value="<?php echo $data->employee_email1 ?>" required autofocus>
                                  @if ($errors->has('employee_email1'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('employee_email1') }}</strong>
                                      </span>
                                  @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('employee_email2') ? ' has-error' : '' }}">
                            <label for="employee_email2" class="col-md-4 control-label">Employee Email2</label>

                            <div class="col-md-6">
                                  <input id="employee_email2" type="text" class="form-control" name="employee_email2" value="<?php echo $data->employee_email2 ?>" required autofocus>
                                  @if ($errors->has('employee_email2'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('employee_email2') }}</strong>
                                      </span>
                                  @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('employee_email3') ? ' has-error' : '' }}">
                            <label for="employee_email3" class="col-md-4 control-label">Employee Email 3</label>

                            <div class="col-md-6">
                                  <input id="employee_email3" type="text" class="form-control" name="employee_email3" value="<?php echo $data->employee_email3 ?>" required autofocus>
                                  @if ($errors->has('employee_email3'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('employee_email3') }}</strong>
                                      </span>
                                  @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('employee_email4') ? ' has-error' : '' }}">
                            <label for="employee_id" class="col-md-4 control-label">Employee Email4</label>

                            <div class="col-md-6">
                                  <input id="employee_email4" type="text" class="form-control" name="employee_email4" value="<?php echo $data->employee_email4 ?>" required autofocus>
                                  @if ($errors->has('employee_email4'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('employee_email4') }}</strong>
                                      </span>
                                  @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('employee_email5') ? ' has-error' : '' }}">
                            <label for="employee_email5" class="col-md-4 control-label">Employee Email5</label>

                            <div class="col-md-6">
                                  <input id="employee_email5" type="text" class="form-control" name="employee_email5" value="<?php echo $data->employee_email5 ?>" required autofocus>
                                  @if ($errors->has('employee_email5'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('employee_email5') }}</strong>
                                      </span>
                                  @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('discription') ? ' has-error' : '' }}">
                            <label for="discription" class="col-md-4 control-label">Discription</label>

                            <div class="col-md-6">
                              <textarea rows="4" cols="50" class="form-control" name="discription" id="discription" value="<?php echo $data->discription ?>" required >
                              </textarea>

                                @if ($errors->has('discription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('discription') }}</strong>
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
                                <button type="button" class="btn btn-success btn-sm " onclick="goBack()">Back</button></center>

                                   <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                    </script>
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
