 <?php

 
 require_once 'model/Conexcao.php';

 require_once 'model/ReservaDAO.php';

   
 $numeroDeMesa = 15;
 $listImageMesa = "";
 $verificaMesa = FALSE;
 


 $con = new Conexcao(Controlador::$bancoServidor,
         Controlador::$bancoNome,
         Controlador::$bancoUsuario,
         Controlador::$bancoSenha);
 
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
       
