<?php
require_once 'Reserva.php';
require_once 'Conexao.php';
require_once 'Administrador.php';


/**
 * class AdministradorDAO
 * 
 */
class AdministradorDAO
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
		private $administrador_;


		/**
		 * 
		 *
		 * @param Reserva reserva 

		 * @return void
		 * @access public
		 */
		public function cadastrarAdministrador( $reserva ) {
		} // end of member function cadastrarAdministrador

		/**
		 * 
		 *
		 * @param int id 

		 * @param Reserva reserva 

		 * @return void
		 * @access public
		 */
		public function alteraAdminstrador( $id,  $reserva ) {
		} // end of member function alteraAdminstrador

		/**
		 * 
		 *
		 * @param int id 

		 * @return void
		 * @access public
		 */
		public function excluirAdministrador( $id ) {
		} // end of member function excluirAdministrador

		/**
		 * 
		 *
		 * @return void
		 * @access public
		 */
		public function listaTodasAdministradores( ) {
		} // end of member function listaTodasAdministradores

		/**
		 * 
		 *
		 * @return void
		 * @access public
		 */
		public function contaNumeroDeAdministradores( ) {
		} // end of member function contaNumeroDeAdministradores

		/**
		 * 
		 *
		 * @return void
		 * @access public
		 */
		public function maiorIdAdministrador( ) {
		} // end of member function maiorIdAdministrador





} // end of AdministradorDAO
?>
