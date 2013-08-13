<!DOCTYPE html!>
<html lang="pt-br">
<meta charset="utf-8">
<head>
	<title>OnBar</title>
</head>
<link href="css/style.css" rel="stylesheet">
 <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
 <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>-->
 
 <script type="text/javascript" src="lib/jquery.js"></script>
 <script type="text/javascript" src="lib/cycle.js"></script>
 <script type="text/javascript" src="js/script.js"></script>
<body>
  <?php
  include('data.php');
  ?>
<div class="navbar">

  <div class="navbar-inner">
    <div class="container">
       <p class="navbar-text pull-right"><a href="index.php?pagina=reserva" class="navbar-link"><i class="icon-thumbs-up"></i> Fazer Reserva</a></p>
        <a class="brand" >OnBar</a>
          <ul class="nav">
            <li><a><?php print ("$semana, $dia de $mes de $ano");
?></a></li>
           
          </ul>

      
      <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
      <div class="nav-collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
 
    </div>
  </div>
</div>
<div id="container">
  <?php
  
//rotina para troca das paginas carregando apenas parte alterada
        
//rotina para troca das paginas carregando apenas parte alterada
  
if(empty($_GET['pagina'])){
//se variavél pagina não existir    
        $temp = "principal";
        
}else{
  if ($_GET['pagina']=="reserva"){    
    $temp = "reserva";
    
    }
}

if($temp=="principal"){
        include('principal.php'); 
   }
if($temp=="reserva"){
        include('reserva.php'); 
   }


 
  ?>
</div>
</body>
</html>