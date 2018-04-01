<!doctype html>

<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-image: url("https://images.unsplash.com/photo-1498713301984-508015049dc1?ixlib=rb-0.3.5&s=4ef5e2fc2ac5c3cfb14a56201a97145e&auto=format&fit=crop&w=752&q=80");
                 background-repeat: no-repeat, repeat;
                 background-attachment: fixed;
                 background-size: 1600px 820px;

            }


            .content {
                text-align: center;
                padding-left: 50px;
                padding-top: 20px;
                padding-right: 50px;
                color: white;
            }
            table{
              opacity: 0.8;
            }

              td{
                color:#a6a6a6;
                  font-weight: bold;
                }

              th{
                font-weight: bold;
                font-size: 180%;
                color:#495DEE;
              }

        </style>

                <script>
                      function myFunction() {
                          document.getElementById("demo").style.backgroundColor = "#5D1202";
                          }

                      setTimeout(function(){myFunction()},5000);
                </script>
    </head>
    <body>


            <div class="content">

                        <a href="{{ url('/home') }}"  ><img src="images/logo.png" height="50px" width="150px"  ></a>

                              <table class="table table-hover table-dark">
                                <thead>
                                  <tr>

                                    <th scope="col">Client</th>
                                    <th scope="col">Recever</th>
                                    <th scope="col">Email</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <?php foreach ($read as $data){?>
                                    <tr id="demo" onclick="myFunction()">

                                      <td ><?php echo $data->sender ?></td>
                                       <td><?php echo $data->recever ?></td>
                                        <td ><?php echo $data->subject ?></td>


                                      </tr>
                                    <?php } ?>

                                </tbody>
                              </table>
      </div>

    </body>

</html>
