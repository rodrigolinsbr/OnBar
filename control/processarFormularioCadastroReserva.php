 <?php
 require_once 'model/Conexcao.php';
 require_once 'model/Reserva.php';
 require_once 'model/ReservaDAO.php';
 require_once 'model/ClienteDAO.php';
 


 
$tempoMaximoReserva = 30;
$tempoReservaConvertido = ($tempoMaximoReserva * 3600)/60;     
 //consulta se cliente esta cadastrado
    //cria conexao
 $con = new Conexcao(Controlador::$bancoServidor,
         Controlador::$bancoNome,
         Controlador::$bancoUsuario,
         Controlador::$bancoSenha);
   //cria objeto Dao para consultar cliente      
 $clienteDao = new ClienteDAO($con->conec);
 $clienteDao->consultarClientePorCpf($_POST['cpfCliente']);
 
 //vef

 //verifica se cliente esta cadastrado para efetuar a reserva
 if(count($clienteDao->clientes)>0){
     //verifica se senha confere
     if ($clienteDao->clientes[0]->senha == hash('sha512',$_POST['senha'])) {
         
                     //criando objeto cliente 
            $reserva =  new Reserva("",
                     $_POST['cpfCliente'],
                     time(),
                     time(),
                     time() + $tempoReservaConvertido,
                     $_POST['numMesa']);
             //criando objeto Dao

             $reservaDao = new ReservaDAO($con->conec);

             $reservaDao->consultarRservarPorCpfCliente($_POST['cpfCliente']);

             if(count($reservaDao->reservas)== 0){
                 $reservaDao->cadastraReserva($reserva, 0);
             }else{
                    echo '<script>
                    alert("Ja existe mesa reservada em seu nome.");     
                   </script>';
             }

     }else{
         // alerta ao cliente que senha nao confere
            echo '<script>
            alert("Login incorreto.");     
           </script>';
     }
     
}else{

     echo '<script>
            location.href ="index.php?pagina=3&cpf='.$_POST['cpfCliente'].'&numeroMesa='.$_POST['numMesa'].'"     
           </script>';
     
 }
 
 
     /*echo '<script>
            location.href ="index.php?pagina=2"     
          </script>';*/
 ?>
        
