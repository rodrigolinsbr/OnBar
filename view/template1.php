<?php require_once 'control/data.php';?>

<!DOCTYPE html!>

<html lang="pt-br">

<meta charset="utf-8">

<head>

	<title>OnBar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="view/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

</head>

<link href="view/css/style.css" rel="stylesheet">

 <link href="view/lib/bootstrap/css/bootstrap.css" rel="stylesheet">

 <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>-->
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 

 <script type="text/javascript" src="view/lib/jquery.js"></script>

 <script type="text/javascript" src="view/lib/cycle.js"></script>

 <script type="text/javascript" src="view/js/script.js"></script>
<link rel="stylesheet" href="view/lib/jquery-ui-1.10.3.custom/css/smoothness/jquery-ui-1.10.3.custom.css"/>
<script src="view/lib/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>



 

<body>
<style type="text/css">
      body {
       
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 900px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>

<div class="navbar navbar-inverse ">



  <div class="navbar-inner">

    <div class="container">


       <p class="navbar-text pull-right"><a href="index.php?pagina=2" class="navbar-link"><i class="icon-thumbs-up"></i> Fazer Reserva</a></p>

        <a class="brand" >OnBar</a>

          <ul class="nav">

            <li><a><?php print("$semana, $dia de $mes de $ano");

            ?></a></li>


           

          </ul>



      <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->

      <div class="nav-collapse">

        <!-- .nav, .navbar-search, .navbar-form, etc -->

      </div>

 

    </div>

  </div>

</div>

<div class="container-narrow">

 

