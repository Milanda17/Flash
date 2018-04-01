@extends('layouts.admin1')

@section('content')

<div id="page">
       <div id="page">
 <!-- ####################################################################################################### -->

            <div id="body" class="contact">
            <div class="header">
            </div>

            <div class="footer">


              <div class="col-md-9 col-md-offset-2">
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



                  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                  <script type="text/javascript">
                    var visitor = <?php echo $visitor; ?>;
                    console.log(visitor);
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {
                      var data = google.visualization.arrayToDataTable(visitor);
                      var options = {
                        title: 'Project Feedback',
                        curveType: 'function',
                        legend: { position: 'bottom' }
                      };
                      var chart = new google.visualization.LineChart(document.getElementById('linechart'));
                      chart.draw(data, options);
                    }
                  </script>

                  <div id="linechart" style="width: 900px; height: 500px"></div>



                </div>


            </div>
        </div>

 </div>

</div>
</div>
</div>


@endsection
