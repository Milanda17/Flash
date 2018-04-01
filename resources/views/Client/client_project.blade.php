@extends('layouts.client')

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


                          <form class="navbar-form navbar-center">
                             <div class="input-group">
                                  <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Project Name.." title="Type in a name">

                             </div>

                            </form>
                          <table class="table table-striped" id="myTable">
                            <col width="20%">
                            <col width="30%">
                            <col width="40%">
                            <col width="10%">


                            <thead>
                              <th ><center><h4>Project Name</h4></center></th>
                              <th><center><h4>Manager Name</h4></center></th>
                              <th><center><h4>Manager Email</h4></center></th>
                              <th><center><h4></h4></center></th>

                              <th></th>
                            </thead>
                              <?php foreach ($read as $data){?>
                                <?php if ($data->client_email==Auth::user()->email){?>

                                  <tr>
                                   <td ><center><?php echo $data->project_name ?></td>
                                   <td ><center><?php echo $data->client_name ?></td>
                                   <td ><center><?php echo $data->client_email ?></td>
                                   <td ><center><a href="{{URL::to('/client_view_project',$data->Pid)}}"><button type="button" class="btn btn-success btn-sm ">View</button></a></td>

                                  </tr>
                              <?php } ?>
                              <?php } ?>

                          </table>

                          <script>

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
                            </script>


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









                             </div>
                          </div>
                        </div>
                    </div>


            </div>
        </div>

 </div>





@endsection
