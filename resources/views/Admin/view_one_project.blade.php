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












<center><a href="{{URL::to('/enter_project_update',$data->Pid)}}"><button type="button" class="btn btn-primary btn-sm " >Update</button></a>

          <button type="button" class="btn btn-success btn-sm " onclick="goBack()">Back</button>

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
