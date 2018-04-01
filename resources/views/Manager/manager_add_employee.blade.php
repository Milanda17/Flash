@extends('layouts.manager')

@section('content')

<div id="page">
       <div id="page">
 <!-- ####################################################################################################### -->

            <div id="body" class="contact">
            <div class="header">
            </div>

            <div class="footer">

              <div class="sidenavRight">
                <h2><center>Employees</center></h2>
             <table table class="table table-hover table-dark" >
               <col width="20%">
               <col width="80%">

                 <?php foreach ($employee as $data){?>

             <tr>
                      <th ><center><?php echo $data->first_name ?></center></th>

                      <th ><center><?php echo $data->email ?></center></th>

              </tr>


                   <?php } ?>

             </table>




             </div>


              <div class="col-md-7 col-md-offset-2">
                <div class="panel panel-default">

                  @if(session()->has('message'))

                  <div class="alert alert-success">
                    <center>
                      {{session()->get('message')}}
                    </center>

                <meta http-equiv="refresh" content="2">
                  </div>
                  @endif

                  <div class="panel-body">


                <div class="contact">






                        <form class="form-horizontal" method="POST" action="/employee">
                      {{ csrf_field() }}



                      <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">
                          <label for="project_name" class="col-md-4 control-label">Project Name</label>

                          <div class="col-md-6">
                              <select class="form-control" id="project_name"  name="project_name" required autofocus>
                                  <?php foreach ($project as $project): ?>

                                    <option value="<?php echo $project->project_name ?>"><?php echo $project->project_name ?></option>
                                  <?php endforeach; ?>

                              </select>

                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('employee_email1') ? ' has-error' : '' }}">
                        <label for="employee_email1" class="col-md-4 control-label">Employee Emails<font color="black"></font></label>

                        <div class="col-md-6">
                            <input id="employee_email1" type="email" class="form-control" name="employee_email1" value="{{ old('employee_email1') }}" required placeholder="Employee 1">


                        </div>
                    </div>




                  <div class="form-group{{ $errors->has('employee_email2') ? ' has-error' : '' }}">
                    <label for="employee_email2" class="col-md-4 control-label"><font color="black"></font></label>

                    <div class="col-md-6">
                        <input id="employee_email2" type="email" class="form-control" name="employee_email2" value="{{ old('employee_email2') }}" required placeholder="Employee 2">


                    </div>
                </div>

                <div class="form-group{{ $errors->has('employee_email3') ? ' has-error' : '' }}">
                  <label for="employee_email3" class="col-md-4 control-label"><font color="black"></font></label>

                  <div class="col-md-6">
                      <input id="employee_email3" type="email" class="form-control" name="employee_email3" value="{{ old('employee_email3') }}" required placeholder="Employee 3">


                  </div>
              </div>

              <div class="form-group{{ $errors->has('employee_email4') ? ' has-error' : '' }}">
                <label for="employee_email4" class="col-md-4 control-label"><font color="black"></font></label>

                <div class="col-md-6">
                    <input id="employee_email4" type="email" class="form-control" name="employee_email4" value="{{ old('employee_email4') }}" required placeholder="Employee 4">


                </div>
            </div>

            <div class="form-group{{ $errors->has('employee_email5') ? ' has-error' : '' }}">
              <label for="employee_email5" class="col-md-4 control-label"><font color="black"></font></label>

              <div class="col-md-6">
                  <input id="employee_email5" type="email" class="form-control" name="employee_email5" value="{{ old('employee_email5') }}" required placeholder="Employee 5">


              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Add
                  </button>

              </div>
          </div>
                  </form>

                </div>


            </div>
        </div>

 </div>

</div>
</div>
</div>


@endsection
