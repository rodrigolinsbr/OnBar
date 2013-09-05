 <?php

 
 require_once '../model/Conexcao.php';

 require_once '../model/ReservaDAO.php';

   
 $numeroDeMesa = 15;
 $listImageMesa = "";
 $verificaMesa = FALSE;
 
 $modoOperacao = "prod";
 
 
 
$dadosBanco = parse_ini_file("config.ini",true);


if($modoOperacao == "prod"){
    $bancoServidor = $dadosBanco['prod']['servidor'];
    $bancoNome = $dadosBanco['prod']['banco'];
    $bancoUsuario = $dadosBanco['prod']['login'];
    $bancoSenha = $dadosBanco['prod']['senha'];    
}

if($modoOperacao == "oper"){
    $bancoServidor = $dadosBanco['oper']['servidor'];
    $bancoNome = $dadosBanco['oper']['banco'];
    $bancoUsuario = $dadosBanco['oper']['login'];
    $bancoSenha = $dadosBanco['oper']['senha'];
    //informacoes ftp
    $ftpHost = $dadosBanco['ftp']['host'];
    $ftpLogin = $dadosBanco['ftp']['login'];
    $ftpSenha = $dadosBanco['ftp']['senha'];
}


 $con = new Conexcao($bancoServidor,
         $bancoNome,
         $bancoUsuario,
         $bancoSenha);
 
 $reservaDao = new ReservaDAO($con->conec);

 $reservaDao->listarTodasReservas();


for ($index = 1; $index <= $numeroDeMesa; $index++) {
    $verificaMesa = FALSE;
    
    foreach ($reservaDao->reservas as $value) {
        //precorre toda tabela para verificar se a mesa encontra-se na reserva
        if($index == +($value->numeroDaReserva)){
            $verificaMesa = TRUE;
        }
        
    }
    //gera as imagens da mesa
    if ($verificaMesa){
        //correcao para o numero mesa se de dois digitos
        if($index < 10){
            //$listImageMesa .= '<img class="mesa"src="view/images/mesa_red.png" title="'.$index.'">0'.$index;
            echo '<img class="mesa"src="view/images/mesa_red.png" title="'.$index.'">0'.$index; 
        }else{
            //$listImageMesa .= '<img class="mesa"src="view/images/mesa_red.png" title="'.$index.'">'.$index;
            echo'<img class="mesa"src="view/images/mesa_red.png" title="'.$index.'">'.$index;
        }
        
    }else{
        //correcao numero de digitos
        if($index < 10){
            //$listImageMesa .= '<img class="mesa"src="view/images/mesa_green.png" title="'.$index.'">0'.$index;   
            echo '<img class="mesa"src="view/images/mesa_green.png" title="'.$index.'">0'.$index; 
        }else{
            //$listImageMesa .= '<img class="mesa"src="view/images/mesa_green.png" title="'.$index.'">'.$index;
            echo'<img class="mesa"src="view/images/mesa_green.png" title="'.$index.'">'.$index;
        }
                
    }
        
}

 ?>
       
