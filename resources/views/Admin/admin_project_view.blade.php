@extends('layouts.admin1')

@section('content')

<div id="page">
       <div id="page">
 <!-- ####################################################################################################### -->

            <div id="body" class="contact">
            <div class="header">
            </div>

            <div class="footer">
                <div class="contact">
                    <div class="row">
                        <div class="col-md-9 col-md-offset-2">
                            <div class="panel panel-default">


                              <table class="table table-striped" >
                                <col width="30%">
                                <col width="70%">

                                <?php foreach ($read as $data){?>

                                      <tr><th><center>Project Name</th><th><?php echo $data->project_name ?></center></td></tr>
                                      <tr><th><center>Client Name</th><th><?php echo $data->client_name ?></center></td></tr>
                                      <tr><th><center>Client Email</th><th><?php echo $data->client_email ?></center></td></tr>
                                      <tr><th><center>Manager ID</th><th><?php echo $data->manager_id ?></center></td></tr>
                                      <tr><th><center>Employee ID</th><th><?php echo $data->employee_id ?></center></td></tr>
                                      <tr><th><center>Discription</th><th><?php echo $data->discription ?></center></td></tr>

                                  <?php } ?>

                              </table>


                                 </div>
                              </div>
                            </div>

                </div>


            </div>
        </div>

 </div>
</div>




@endsection
