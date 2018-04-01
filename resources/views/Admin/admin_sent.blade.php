@extends('layouts.admin')

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

                              <table  class="table table-hover table-dark">
                                <col width="5%">
                                <col width="20%">
                                <col width="55%">
                                <col width="10%">
                                <col width="10%">


                                <tr>
                                  <td></td>
                                  <td><center><h2>To</h2></center></td>
                                  <td><center><h2></h2></center></td>
                                  <td></td>
                                  <td></td>

                                </tr>

                                  <?php foreach ($sent as $data){?>
                                      <?php if ( $data->sent=="sent"){ ?>
                                          <?php if ( $data->sender==Auth::user()->email){ ?>


                                      <tr>
                                        <td></td>
                                       <td><center><?php echo $data->recever ?></center></td>
                                       <td><center><?php echo $data->description ?></td>
                                       <td ><a href="{{URL::to('/one_mail_sent',$data->Mid)}}"><button type="button" class="btn btn-success btn-sm">View</button></a></td>
                                       <td ><a href="{{URL::to('/delete_mail',$data->Mid)}}" onclick="return confirm('Are you sure delete?')"><button type="button" class="btn btn-danger btn-sm ">Delete</button></a></td>

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
