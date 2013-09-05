<?php
require_once 'Reserva.php';



/**
 * class ReservaDAO
 * 
 */
class ReservaDAO
{

		/** Aggregations: */

		/** Compositions: */

		 /*** Attributes: ***/

		/**
		 * 
		 * @access private
		 */
		private $streamConecxao;

		/**
		 * 
		 * @access private
		 */
		private $statusMessage;

		/**
		 * 
		 * @access private
		 */
		public $reservas;
                

                public function __construct($con) {
                    $this->con = $con;
                }
                
                
                
                public function cadastraReserva($objReserva,$status) {
                    
                   if($status == 0){

                        $sql = "INSERT INTO reserva(id,
                            cpf_cliente,
                            data,
                            hora_inicio,
                            hora_fim,
                            numero_mesa)
                            VALUES(:id,
                            :cpf_cliente,
                            :data,
                            :hora_inicio,
                            :hora_fim,
                            :numero_mesa)";

                        $stmt = $this->con->prepare($sql);
                        $stmt->bindValue(':id',utf8_decode($objReserva->id));
                        $stmt->bindValue(':cpf_cliente',utf8_decode($objReserva->cpfCliente));
                        $stmt->bindValue(':data',utf8_decode($objReserva->dataReserva));
                        $stmt->bindValue(':hora_inicio',utf8_decode($objReserva->horaInicio));
                        $stmt->bindValue(':hora_fim',utf8_decode($objReserva->horaFim));
                        $stmt->bindValue(':numero_mesa',utf8_decode($objReserva->numeroDaReserva));
                        $stmt->execute();
                        if($stmt->rowCount()>0){
                            $this->message = "Dados inserido com sucesso.";
                        }
                   }else{
                           $this->message = "Reserva já cadastrado(a).";
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
		public function alterarReserva( $id,$objReserva ) {
                    
                    $sql ="UPDATE reserva SET cpf_cliente = :cpf_cliente,data = :data,hora_inicio = :hora_inicio,
                        hora_fim = :hora_fim,numero_mesa = :numero_mesa WHERE id = :id";
                    $stmt = $this->con->prepare($sql);

                    $stmt->bindValue(":id",$id);
                    $stmt->bindValue(':cpf_cliente',utf8_decode($objReserva->cpfCliente));
                    $stmt->bindValue(':data',utf8_decode($objReserva->dataReserva));
                    $stmt->bindValue(':hora_inicio',utf8_decode($objReserva->horaInicio));
                    $stmt->bindValue(':hora_fim',utf8_decode($objReserva->horaFim));
                    $stmt->bindValue(':numero_mesa',utf8_decode($objReserva->numeroDaReserva));

                    $stmt->execute();                 

                    if($stmt->rowCount()>0){
                            $this->message = "Dados alterados com sucesso.";
                    }else{
                            $this->message = "Dados não podem ser alterados ou modificados";
                    }
		} // end of member function alterarCliente
                
                    //consultar item
                
                public function consultarRservarPorCpfCliente($cpfCliente){

                    //selsciona todos os itens da tabela ou um especifico
                    $this->reservas = Array();
                    $sql = "SELECT * FROM reserva";

                    $resultado = $this->con->query($sql);  
                    if(count($resultado)>0){
                        foreach ($resultado as $value) {
                            if(strcasecmp($value['cpf_cliente'], utf8_decode($cpfCliente))== 0){                
                                 
                                $reserva = new Reserva($value['id'],
                                        $value['id'],
                                        $value['cpf_cliente'],
                                        $value['hora_inicio'],
                                        $value['hora_fim'],
                                        $value['numero_mesa']);
                                
                                array_push($this->reservas, $reserva);

                            }
                        } 
                        $this->message = "Foram encontados ".$resultado->rowCount()." reserva(s)."; 
                    }else{
                        $this->message = "A consulta não encontrou nenhuma reserva"; 
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
		public function excluirReserva( $id ) {
                    
                    $sql = "DELETE FROM reserva WHERE id=:id" ;
                    $stmt = $this->con->prepare($sql);

                    $stmt->bindValue(':id', $id);
                    $stmt->execute();

                    if($stmt->rowCount()>0){            
                        $this->message = "Rserva excluidos com sucesso.";
                    }else{
                        $this->message = "Rserva não foi encontrado ou não pode ser excluida."; 
                    }
                    
		} // end of member function excluirCliente

		/**
		 * 
		 *
		 * @return void
		 * @access public
		 */
		public function listarTodasReservas( ) {
                    $this->reservas = Array();
                    
                    $sql = "SELECT * FROM reserva ORDER BY id ASC";
                    $resultado = $this->con->query($sql);

                    if($resultado->rowCount()>0){
                        foreach ($resultado as $value) {

                            $reserva = new Reserva($value['id'],
                                    $value['cpf_cliente'],
                                    $value['data'],
                                    $value['hora_inicio'],
                                    $value['hora_fim'],
                                    $value['numero_mesa']);

                            array_push($this->reservas, $reserva);
                        }      
                    }                   
                    
		} // end of member function listarTodosClientes

		/**
		 * 
		 *
		 * @return int
		 * @access public
		 */
		public function contarNumeroDeReservas( ) {
                    
                    $this->reservas = Array();
                    $sql = "SELECT DISTINCT cpf_cliente FROM reserva";
                    $resultado = $this->con->query($sql);

                    if($resultado->rowCount()>0){
                        foreach ($resultado as $value) {
                            
                                $reserva = $value['cpf_cliente'];
                                
                        array_push($this->reservas, $reserva); 
                        }      
                    }
                    return count($this->reservas);
		} // end of member function contarNumeroDeClientes

		/**
		 * 
		 *
		 * @return int
		 * @access public
		 */
		public function pegarMaiorIdReserva( ) {
                    
                    $sql = "select MAX(id) FROM reserva";
                    $resultado = $this->con->query($sql);
     
                    foreach ($resultado as $value) {
                        //verifica produto idependente de maiusculas e minusculas
                        $temp = $value['MAX(id)'];
                        
                        }
                        
                       return $temp;
		} // end of member function pegarMaiorIdCliente






} // end of ReservaDAO
?>
