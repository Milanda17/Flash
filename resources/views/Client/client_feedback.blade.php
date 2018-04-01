@extends('layouts.client')

@section('content')

<div id="page">

 <!-- ####################################################################################################### -->

            <div id="body" class="contact">
            <div class="header">
            </div>

            <div class="footer">



<div class="col-md-7 col-md-offset-2">
  <div class="panel panel-default">

    @if(session()->has('message'))

    <div class="alert alert-success">
      <center>
        {{session()->get('message')}}
      </center>

  <meta http-equiv="refresh" content="2">
    </div>
    @endif



    <div class="panel-body">


                <div class="contact">

                <center>  <h2>Feedback Form</h2>  </center>
              </br>

                  <form  method="POST" action="/enter_feedback">


                      {{ csrf_field() }}

                      <div class="col-md-8">
                          <label for="project_name" class="col-md-4 control-label"><font color="black">Project Name :</font></label>
                      <div class="col-md-6">

                          <select class="form-control" id="project_name"  name="project_name" required autofocus>
                                <option value="None" selected>None</option>
                            <?php foreach ($read as $data){?>
                                  <?php if ( $data->client_email==Auth::user()->email){ ?>

                                <option value="<?php echo $data->project_name ?>"><?php echo $data->project_name ?></option>
                              <?php } ?>
                              <?php } ?>


                          </select>

                      </div>
                    </div>
                </br>
                <p> &nbsp;</p>


            <h4>1. Did our product or service meet your expectations? </h4>


             <label class="btn-group btn-group-toggle">
             <input type="radio" value="5" name="Q1" id="5">&nbsp;Yes
             &nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" value="0" name="Q1" id="0">&nbsp;No
           </label>
         </br></br>

              <p></p>

              <h4>2. Overall,how satisfied are you with the product or service? </h4>

            <label class="btn-group btn-group-toggle">
              <input type="radio" value="10" name="Q2" id="10">&nbsp;Very Satisfied
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" value="7" name="Q2" id="7">&nbsp;Satisfied
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" value="5" name="Q2" id="5">&nbsp;Neutral
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" value="0" name="Q2" id="0">&nbsp;Unsatisfied
            </label>
          </br></br>

              <p></p>

              <h4>3. What aspect of the product or service were you most satistied by?</h4>

              <label class="btn-group btn-group-toggle">
             <input type="radio" value="8" name="Q3" id="8">&nbsp;Quality
             &nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" value="5" name="Q3" id="5">&nbsp;Ease of use
         </label>
       </br></br>

              <p></p>

              <h4>4. Would you recommend this product or service to a friend?</h4>


             <label class="btn-group btn-group-toggle">
             <input type="radio" value="10" name="Q4" id="10">&nbsp;Yes
     &nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" value="n0" name="Q4" id="0">&nbsp;No
           </label>
         </br></br>

<h4>5. Are you getting value for your money?</h4>
               <label class="btn-group btn-group-toggle">
               <input type="radio" value="10" name="Q5" id="10">&nbsp;Yes
       &nbsp;&nbsp;&nbsp;&nbsp;
               <input type="radio" value="0" name="Q5" id="0">&nbsp;No
             </label>
           </br></br>


              <button type="submit" class="btn btn-primary btn-md" >
                  Submit
              </button>
          </form>

                </div>


            </div>
        </div>

 </div>





@endsection
