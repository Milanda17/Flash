@extends('layouts.employee')

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

                           <table table class="table table-hover table-dark" >
                             <col width="40%">
                             <col width="50%">
                             <col width="10%">

                             <tr>
                               <td ><center><h3>Project Name</h3></center></td>
                               <td><center><h3>Client Name</h3></center></td>
                               <td></td>

                             </tr>

                               <?php foreach ($read as $data){?>
                                  <?php if ( $data->employee_email1==Auth::user()->email ||  $data->employee_email2==Auth::user()->email ||  $data->employee_email3==Auth::user()->email ||  $data->employee_email4==Auth::user()->email ||  $data->employee_email5==Auth::user()->email){?>


                                   <tr>
                                    <td width="30%"><center><?php echo $data->project_name ?></center></td>
                                    <td width="40%"><center><?php echo $data->client_name ?></center></td>
                                    <td width="10%"><a href="{{URL::to('/client_view_project',$data->Pid)}}"><button type="button" class="btn btn-success btn-sm">View</button></a></td>


                                   </tr>

                               <?php } ?>
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
