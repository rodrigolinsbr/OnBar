 <?php
 require_once 'model/Conexcao.php';
 require_once 'model/Cliente.php';
 require_once 'model/ClienteDAO.php';
 
// require_once '';
 
 $con = new Conexcao(Controlador::$bancoServidor,
         Controlador::$bancoNome,
         Controlador::$bancoUsuario,
         Controlador::$bancoSenha);
 $senhaEncripitada = hash('sha512',$_POST['senha']);
 
//criando objeto cliente 
 $cliente = new Cliente("",
         $_POST['nome'],
         $_POST['email'],
         $_POST['cpf'],
         $senhaEncripitada);
 //criando objeto Dao
 
 $clienteDao = new ClienteDAO($con->conec);
 
 $clienteDao->consultarClientePorCpf($_POST['cpf']);
 
 if(count($clienteDao->clientes)== 0){
     $clienteDao->cadastraCliente($cliente, 0);
      echo '<script>
        location.href ="index.php?pagina=2&cpf='.$_POST['cpf'].'&numeroMesa='.$_GET['numeroMesa'].'"     
       </script>';
 }
 
 ?>
        
