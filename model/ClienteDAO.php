<?php
require_once 'Cliente.php';
//require_once 'Conexao.php';


/**
 * class ClienteDAO
 * 
 */
class ClienteDAO
{

		/** Aggregations: */

		/** Compositions: */

		 /*** Attributes: ***/

		/**
		 * 
		 * @access private
		 */
		private $con;

		/**
		 * 
		 * @access private
		 */
		private $statusMessage;

		/**
		 * 
		 * @access private
		 */
		public $clientes;


		/**
		 * 
		 *
		 * @param Cliente cliente 

		 * @return bool
		 * @access public
		 */
                
                public function __construct($con) {
                    $this->con = $con;
                }
                public function cadastraCliente($objCliente,$status ) {
                    
                   if($status == 0){

                        $sql = "INSERT INTO cliente(id,
                            nome,
                            email,
                            cpf,
                            senha)
                            VALUES(:id,
                            :nome,
                            :email,
                            :cpf,
                            :senha)";

                        $stmt = $this->con->prepare($sql);
                        $stmt->bindValue(':id',utf8_decode($objCliente->id));
                        $stmt->bindValue(':nome',utf8_decode($objCliente->nome));
                        $stmt->bindValue(':email',utf8_decode($objCliente->email));
                        $stmt->bindValue(':cpf',utf8_decode($objCliente->cpf));
                        $stmt->bindValue(':senha',utf8_decode($objCliente->senha));
                        $stmt->execute();
                        if($stmt->rowCount()>0){
                            $this->message = "Dados inserido com sucesso.";
                        }
                   }else{
                           $this->message = "Cliente já cadastrado(a).";
                   }
                    
                    
		} // end of member function CadastraCliente

		/**
		 * 
		 *
		 * @param int id 

		 * @param Cliente cliente 

		 * @return bool
		 * @access public
		 */
		public function alterarCliente( $id,$objCliente ) {
                    
                    $sql ="UPDATE cliente SET nome = :nome,email = :email,cpf = :cpf,senha = :senha
                        WHERE id = :id";
                    $stmt = $this->con->prepare($sql);

                    $stmt->bindValue(":id",$id);
                    $stmt->bindValue(":nome",utf8_decode($objCliente->nome));
                    $stmt->bindValue(":email",utf8_decode($objCliente->email));
                    $stmt->bindValue(":cpf",utf8_decode($objCliente->cpf));
                    $stmt->bindValue(":senha",$objCliente->dataescrita);

                    $stmt->execute();                 

                    if($stmt->rowCount()>0){
                            $this->message = "Dados alterados com sucesso.";
                    }else{
                            $this->message = "Dados não podem ser alterados ou modificados";
                    }
		} // end of member function alterarCliente
                
                    //consultar item
                
                public function consultarClientePorCpf($cpfCliente){

                    //selsciona todos os itens da tabela ou um especifico
                    $this->clientes= Array();
                    $sql = "SELECT * FROM cliente";

                    $resultado = $this->con->query($sql);  
                    if(count($resultado)>0){
                        foreach ($resultado as $value) {
                            if(strcasecmp($value['cpf'], utf8_decode($cpfCliente))== 0){                
                                 
                                $cliente = new Cliente($value['id'],
                                             $value['nome'],
                                             $value['email'],
                                             $value['cpf'],
                                             $value['senha']);
                                    array_push($this->clientes, $cliente);

                            }
                        } 
                        $this->message = "Foram encontados ".$resultado->rowCount()." clientes(s)."; 
                    }else{
                        $this->message = "A consulta não encontrou nenhum cliente"; 
                    }
                    //carrega array de nome e descrição 

                }
                
                
		/**
		 * 
		 *
		 * @param int id 

		 * @return bool
		 * @access public
		 */
		public function excluirCliente( $id ) {
                    
                    $sql = "DELETE FROM cliente WHERE id=:id" ;
                    $stmt = $this->con->prepare($sql);

                    $stmt->bindValue(':id', $id);
                    $stmt->execute();

                    if($stmt->rowCount()>0){            
                        $this->message = "Cleinte excluidos com sucesso.";
                    }else{
                        $this->message = "Cliente não foi encontrado ou não pode ser excluido."; 
                    }
                    
		} // end of member function excluirCliente

		/**
		 * 
		 *
		 * @return void
		 * @access public
		 */
		public function listarTodosClientes( ) {
                    $this->clientes = Array();
                    $sql = "SELECT * FROM cliente ORDER BY id DESC";
                    $resultado = $this->con->query($sql);

                    if($resultado->rowCount()>0){
                        foreach ($resultado as $value) {
                         $cliente = new Cliente($value['id'],
                                 $value['nome'],
                                 $value['email'],
                                 $value['cpf'],
                                 $value['senha']);
                        array_push($this->clientes, $cliente);

                        }      
                    }                   
                    
		} // end of member function listarTodosClientes

		/**
		 * 
		 *
		 * @return int
		 * @access public
		 */
		public function contarNumeroDeClientesCadastrados( ) {
                    
                    $this->clientes = Array();
                    $sql = "SELECT DISTINCT cpf FROM cliente ";
                    $resultado = $this->con->query($sql);

                    if($resultado->rowCount()>0){
                        foreach ($resultado as $value) {
                                $artigo = $value['nome'];
                        array_push($this->clientes, $artigo); 
                        }      
                    }
                    return count($this->clientes);
		} // end of member function contarNumeroDeClientes

		/**
		 * 
		 *
		 * @return int
		 * @access public
		 */
		public function pegarMaiorIdCliente( ) {
                    
                    $sql = "select MAX(id) FROM cliente";
                    $resultado = $this->con->query($sql);
     
                    foreach ($resultado as $value) {
                        //verifica produto idependente de maiusculas e minusculas
                        $temp = $value['MAX(id)'];
                        
                        }
                        
                       return $temp;
		} // end of member function pegarMaiorIdCliente





} // end of ClienteDAO
?>
