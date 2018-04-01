@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-10 col-md-offset-2">
                  <nav class="navbar navbar-inverse navbar">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand">Project</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li ><a href="add_project">Add</a></li>

                      <li class="active"><a href="view_project">View</a></li>

                    </ul>

                    <form class="navbar-form navbar-left">
                       <div class="input-group">
                            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Project Name.." title="Type in a name">

                       </div>

                        </form>

                  </div>
                </nav>

            <div class="panel panel-default">

              <table class="table table-striped" id="myTable">
                <col width="20%">
                <col width="20%">
                <col width="30%">
                <col width="10%">
                <col width="10%">
                <col width="10%">

                <thead>
                  <th ><center><h4>Project Name</h4></center></th>
                  <th><center><h4>Client Name</h4></center></th>
                  <th><center><h4>Client Email</h4></center></th>
                  <th><center><h4></h4></center></th>
                  <th><center><h4></h4></center></th>
                  <th><center><h4></h4></center></th>
                  <th></th>
                </thead>
                  <?php foreach ($read as $data){?>
                  

                      <tr>
                       <td ><center><?php echo $data->project_name ?></td>
                       <td ><center><?php echo $data->client_name ?></td>
                       <td ><center><?php echo $data->client_email ?></td>
                       <td ><center><a href="{{URL::to('/view_one_project',$data->Pid)}}"><button type="button" class="btn btn-success btn-sm ">View</button></a></td>
                      <td ><center><a href="{{URL::to('/enter_project_update',$data->Pid)}}"><button type="button" class="btn btn-primary btn-sm " >Update</button></a></td>
                       <td ><center><a href="{{URL::to('/delete_project',$data->Pid)}}" onclick="return confirm('Are you sure delete?')"><button type="button" class="btn btn-danger btn-sm ">Delete</button></a></td>
                      </tr>

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
@endsection
