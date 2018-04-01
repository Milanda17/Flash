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
                        <div class="col-md-8 col-md-offset-2">


                          @if(session()->has('message'))

                          <div class="alert alert-success">
                            <center>
                              {{session()->get('message')}}
                            </center>

                        <meta http-equiv="refresh" content="2">
                          </div>
                          @endif

                            <div class="panel panel-default">


                              <table class="table table-hover" >
                                <col width="30%">
                                <col width="70%">

                                <?php foreach ($read as $data){?>

                                  <tr><th><center>Sender</th><th><?php echo $data->sender ?></center></td></tr>
                                  <tr><th><center>Subject</th><th><?php echo $data->subject ?></center></td></tr>
                                  <tr><th><center>Content</th><th><?php echo $data->description ?></center></td></tr>
                                  <?php if( $data->attachment!=NULL){?>  <tr> <center><th colspan="2"> <a href="{{URL::to('/download',$data->attachment)}} " class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download Image </a></th></tr>
                                      <tr><center><th colspan="2"><img src="/images/{{$data->attachment}}" width="40%" height="40%"></th></tr> <?php }?>
                                  <tr><center><th colspan="2"> <center><button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#reply">Reply</button>
                                  <button type="button" class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#forward">Forward</button>
                                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" onclick="goBack()">Back</button></th></tr>



                              </table>
                                    <script>
                                    function goBack() {
                                        window.history.back();
                                        var x=0;
                                        localStorage.setItem("storageName",x);
                                    }
                                    </script>


                                 </div>
                              </div>
                            </div>




<!--........................................................................................................................................................................................................-->
                            <div class="modal fade" id="reply" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Message Reply</h4>
                                    </div>
                                    <div class="modal-body">

                                            <div class="panel-body">
                                                <form class="form-horizontal" method="POST" action="/mail_register">
                                                    {{ csrf_field() }}


                                                    <div class="form-group{{ $errors->has('to') ? ' has-error' : '' }}">
                                                        <label for="to" class="col-md-4 control-label"><font color="black">To</font></label>

                                                        <div class="col-md-6">
                                                            <input id="to" type="email" class="form-control" name="to" value="<?php echo $data->sender ?>" required autofocus placeholder="To">

                                                            @if ($errors->has('to'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('to') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <?php } ?>


                                                    <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                                        <label for="subject" class="col-md-4 control-label"><font color="black">Subject</font></label>

                                                        <div class="col-md-6">
                                                            <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" required placeholder="Subject">


                                                        </div>
                                                    </div>

                                                    <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">

                                                        <div class="col-md-6">
                                                            <input id="project_name" type="hidden" class="form-control" name="project_name" value="0" required placeholder="project_name">


                                                        </div>
                                                    </div>


                                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                                        <label for="description" class="col-md-4 control-label"></label>

                                                        <div class="col-md-6">

                                                          <textarea rows="4" cols="50" class="form-control" name="description" id="description" value="{{ old('description') }}" required >
                                                          </textarea>


                                                        </div>
                                                    </div>




                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary" name="submit_button" value="sent">
                                                                Send
                                                            </button>

                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>



                                                </form>
                                            </div>
                                    </div>
                                  </div>

                                </div>
                              </div>

                            </div>
<!--..................................................................................................................................-->


<div class="modal fade" id="forward" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Message Forward</h4>
        </div>
        <div class="modal-body">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/mail_register">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('to') ? ' has-error' : '' }}">
                            <label for="to" class="col-md-4 control-label"><font color="black">To</font></label>

                            <div class="col-md-6">
                              <input id="to" type="email" class="form-control" name="to" value="{{ old('to') }}" required autofocus placeholder="To">

                            </div>
                        </div>


                                    <input id="subject" type="hidden" class="form-control" name="subject" value="<?php echo $data->subject ?>" >
                                    <input id="project_name" type="hidden" class="form-control" name="project_name" value="<?php echo $data->project_name ?>" >
                                    <input id="description" type="hidden" class="form-control" name="description" value="<?php echo $data->description ?>" >

                      <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="submit_button" value="sent">
                                    Send
                                </button>

                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>



                    </form>
                </div>
        </div>
      </div>

    </div>
  </div>

</div>














<!--....................................................................................................................................-->

                </div>


            </div>
        </div>

 </div>
</div>




@endsection
