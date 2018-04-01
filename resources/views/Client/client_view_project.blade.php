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
                                  <thead>

                                      <th colspan="2"><h1><center>Project &nbsp;&nbsp;"<?php echo $data->project_name ?>" &nbsp;&nbsp; Details</th>

                                  </thead>
                                  <tr>
                                   <td ><h4><center>Project ID</td>
                                   <td ><center><?php echo $data->Pid ?></td>
                                   </tr>

                                   <tr>
                                    <td ><h4><center>Project Name</td>
                                    <td ><center><?php echo $data->project_name ?></td>
                                    </tr>

                                    <tr>
                                     <td ><h4><center>Client Name</td>
                                     <td ><center><?php echo $data->client_name ?></td>
                                     </tr>

                                     <tr>
                                      <td ><h4><center>Client Email</td>
                                      <td ><center><?php echo $data->client_email ?></td>
                                      </tr>

                                      <tr>
                                       <td ><h4><center>Manager Email</td>
                                       <td ><center><?php echo $data->manager_email ?></td>
                                       </tr>

                                       <tr>
                                        <td ><h4><center>Employee 1 Email</td>
                                        <td ><center><?php echo $data->employee_email1 ?></td>
                                        </tr>

                                        <tr>
                                         <td ><h4><center>Employee 2 Email</td>
                                         <td ><center><?php echo $data->employee_email2 ?></td>
                                         </tr>

                                         <tr>
                                          <td ><h4><center>Employee 3 Email</td>
                                          <td ><center><?php echo $data->employee_email3 ?></td>
                                          </tr>

                                          <tr>
                                           <td ><h4><center>Employee 4 Email</td>
                                           <td ><center><?php echo $data->employee_email4 ?></td>
                                           </tr>

                                           <tr>
                                            <td ><h4><center>Employee 5 Email</td>
                                            <td ><center><?php echo $data->employee_email5 ?></td>
                                            </tr>
                                            <tr>
                                             <td ><h4><center>Discription</td>
                                             <td ><center><?php echo $data->discription ?></td>
                                             </tr>


                                             <tr>

                                               <button type="button" class="btn btn-success btn-sm " onclick="goBack()">Back</button>

                                                    <script>
                                                        function goBack() {
                                                            window.history.back();
                                                        }
                                                    </script>
                                             </tr>
                              <?php } ?>


                          </table>


                             </div>
                          </div>
                        </div>
                    </div>


            </div>
        </div>

 </div>





@endsection
