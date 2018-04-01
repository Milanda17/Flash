@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-10 col-md-offset-2">

                  <nav class="navbar navbar-inverse navbar">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand">Employee</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li><a href="add_employee">Add</a></li>

                      <li  class="active"><a href="view_employee">View</a></li>

                    </ul>
                    <form class="navbar-form navbar-left">
                       <div class="input-group">
                          <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for ID.." title="Type in a name">
                       </div>
                     </form>

                  </div>
                </nav>


            <div class="panel panel-default">
              <table table class="table table-hover table-dark" id="myTable">
                    <col width="20%">
                    <col width="20%">
                    <col width="30%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">


                    <tr>
                      <th ><center><h3>First Name</h2></center></th>
                      <th><center><h3>Last Name</h3></center></th>
                      <th><center><h3>Email</h3></center></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>

                    <?php foreach ($read as $data){?>
                      <?php if($data==NULL){?>
                          <h2>No Data</h2>
                      <?php } ?>


                          <tr>
                           <td ><center><?php echo $data->first_name ?></center></td>
                           <td ><center><?php echo $data->last_name ?></td>
                           <td ><center><?php echo $data->email ?></td>
                           <td ><a href="{{URL::to('/view_one_employee',$data->id)}}"><button type="button" class="btn btn-success btn-sm">View</button></a></td>
                             <td ><center><a href="{{URL::to('/enter_employee_update',$data->id)}}"><button type="button" class="btn btn-primary btn-sm " >Update</button></a></td>
                           <td><a href="{{URL::to('/delete_employee',$data->id,$data->account_type)}}" onclick="return confirm('Are you sure delete?')"><button type="button" class="btn btn-danger btn-sm ">Delete</button></a></td>

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

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
