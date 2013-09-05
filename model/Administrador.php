<?php
require_once 'Cliente.php';


/**
 * class Administrador
 * 
 */
class Administrador
{

		/** Aggregations: */

		/** Compositions: */

		 /*** Attributes: ***/

		/**
		 * 
		 * @access public
		 */
		public $nome;

		/**
		 * 
		 * @access public
		 */
		public $cpf;

		/**
		 * 
		 * @access public
		 */
		public $senha;


		/**
		 * 
		 *
		 * @return double
		 * @access public
		 */
		public function consultaTaxaOcupacaoXTaxaReserva( ) {
		} // end of member function consultaTaxaOcupacaoXTaxaReserva

		/**
		 * 
		 *
		 * @return void
		 * @access public
		 */
		public function consultarTempoRestanteReservas( ) {
		} // end of member function consultarTempoRestanteReservas

		/**
		 * 
		 *
		 * @param Cliente cpf 

		 * @return bool
		 * @access public
		 */
		public function revalidarReserva( $cpf ) {
		} // end of member function revalidarReserva

		/**
		 * 
		 *
		 * @param Cliente cpf 

		 * @return bool
		 * @access public
		 */
		public function desbloquearUsuarioParaReserva( $cpf ) {
		} // end of member function desbloquearUsuarioParaReserva





} // end of Administrador
?>
