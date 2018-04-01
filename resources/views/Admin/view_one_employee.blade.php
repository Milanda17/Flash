@extends('layouts.admin1')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-10 col-md-offset-2">

            <div class="panel panel-default">


              <table class="table table-striped" >
                <col width="30%">
                <col width="70%">



                  <?php foreach ($read as $data){?>
                      <thead>

                          <th colspan="2"><h1><center>"<?php echo $data->first_name ?>&nbsp;<?php echo $data->last_name ?>" &nbsp;&nbsp; Details</th>

                      </thead>


                       <tr>
                        <td ><h4><center>First Name</td>
                        <td ><center><?php echo $data->first_name ?></td>
                        </tr>

                        <tr>
                         <td ><h4><center>Last Name</td>
                         <td ><center><?php echo $data->last_name ?></td>
                         </tr>

                         <tr>
                          <td ><h4><center>Email</td>
                          <td ><center><?php echo $data->email ?></td>
                          </tr>

                          <tr>
                           <td ><h4><center>Telephone No</td>
                           <td ><center><?php echo $data->tele_no ?></td>
                           </tr>

                           <tr>
                            <td ><h4><center>Gender</td>
                            <td ><center><?php echo $data->gender ?></td>
                            </tr>

                            <tr>
                             <td ><h4><center>Account Type</td>
                             <td ><center><?php echo $data->account_type?></td>
                             </tr>

                             <tr>
                              <td ><h4><center>Date Of Birth</td>
                              <td ><center><?php echo $data->dob ?></td>
                              </tr>
                              <tr>
>


                  <?php } ?>

              </table>

        <!--    <script>
              function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[0];
                  if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  }
                }
              }
            </script>-->



              <div class="modal fade" id="view" role="dialog">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Project Details</h4>
                    </div>
                    <div class="modal-body">

                            <div class="panel-body">
                              <table class="table table-striped" >
                                <col width="30%">
                                <col width="50%">

                                    <tr>
                                     <td ><center><?php echo $data->project_name ?></td>
                                     <td ><center><?php echo $data->client_name ?></td>
                                     <td ><center><?php echo $data->client_email ?></td>
                                    </tr>

                              </table>
                            <center>  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                    </div>

                  </div>

                </div>
              </div>

              </div>













    <center>  <a href="{{URL::to('/enter_employee_update',$data->id)}}"><button type="button" class="btn btn-primary btn-sm " >Update</button></a>
     <button type="button" class="btn btn-success btn-sm " onclick="goBack()">Back</button></center>

        <script>
         function goBack() {
             window.history.back();
         }
         </script>
            </div>

        </div>
    </div>
</div>
@endsection
