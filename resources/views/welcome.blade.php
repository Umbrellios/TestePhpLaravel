<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../resources/images/icons/favicon.ico"/>
      <!--===============================================================================================-->
      	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
      <!--===============================================================================================-->
      	<link rel="stylesheet" type="text/css" href="../resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <!--===============================================================================================-->
      	<link rel="stylesheet" type="text/css" href="../resources/fonts/iconic/css/material-design-iconic-font.min.css">
      <!--===============================================================================================-->
      	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
      <!--===============================================================================================-->
      	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
      <!--===============================================================================================-->
      	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
      <!--===============================================================================================-->
      	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
      <!--===============================================================================================-->
      	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
      <!--===============================================================================================-->
      	<link rel="stylesheet" type="text/css" href="../resources/css/util.css">
      	<link rel="stylesheet" type="text/css" href="../resources/css/main.css">

        <title>Teste PHP Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="flex position-ref full-height">
          <div class="content">
              <div class="title m-b-md">
                  <a href ="/introducao/public"><img src="../resources/images/logo/laravel.png"></a>
              </div>
      <div class="container">
        @yield('content')
      </div>


      <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="../vendor/animsition/js/animsition.min.js"></script>
      <!--===============================================================================================-->
      <script src="../vendor/bootstrap/js/popper.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="../vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script src="../vendor/daterangepicker/moment.min.js"></script>
      <script src="../vendor/daterangepicker/daterangepicker.js"></script>
      <!--===============================================================================================-->
      <script src="../vendor/countdowntime/countdowntime.js"></script>
      <!--===============================================================================================-->
      <script src="../resources/js/main.js"></script>
      <script>
        $(function(){
        });
      </script>
    </body>
</html>
