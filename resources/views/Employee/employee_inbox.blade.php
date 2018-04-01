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

                             <col width="5%">
                             <col width="20%">
                             <col width="55%">
                             <col width="10%">
                             <col width="10%">
                             <tr>
                               <td></td>
                               <td ><center><h2>From</h2></center></td>
                               <td><center><h2></h2></center></td>
                               <td></td>
                               <td></td>

                             </tr>


                             <?php foreach ($read as $data){?>
                                <?php if ( $data->sent=="sent"){ ?>
                               <?php if ( $data->recever==Auth::user()->email){ ?>


                                   <tr>
                                    <td><?php if ( $data->read!="read"){ ?><span class="label label-danger">New</span><?php }?></a></td>
                                    <td width="30%"><center><?php echo $data->sender ?></center></td>
                                    <td width="40%"><?php echo $data->description ?></td>
                                    <td width="10%"><a href="{{URL::to('/view_mail',$data->Mid)}}"><button type="button" class="btn btn-success btn-sm">View</button></a></td>
                                    <td width="10%"><a href="{{URL::to('/delete_mail',$data->Mid)}}" onclick="return confirm('Are you sure delete?')"><button type="button" class="btn btn-danger btn-sm ">Delete</button></a></td>


                                   </tr>

                               <?php } ?>
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
