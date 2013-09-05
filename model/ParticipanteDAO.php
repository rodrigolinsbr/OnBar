<?php
require_once 'Participente.php';
require_once 'Conexao.php';


/**
 * class ParticipanteDAO
 * 
 */
class ParticipanteDAO
{

		/** Aggregations: */

		/** Compositions: */

		 /*** Attributes: ***/

		/**
		 * 
		 * @access private
		 */
		private $streamConexcao;

		/**
		 * 
		 * @access private
		 */
		private $participates_;

		/**
		 * 
		 * @access private
		 */
		private $statusMessage;


		/**
		 * 
		 *
		 * @param Participente participanmte 

		 * @return void
		 * @access public
		 */
		public function cadastrarParticipante( $participanmte ) {
		} // end of member function cadastrarParticipante

		/**
		 * 
		 *
		 * @param int id 

		 * @param Participente partipante 

		 * @return void
		 * @access public
		 */
		public function alterarParticipante( $id,  $partipante ) {
		} // end of member function alterarParticipante

		/**
		 * 
		 *
		 * @param int id 

		 * @return bool
		 * @access public
		 */
		public function excluirParticipante( $id ) {
		} // end of member function excluirParticipante

		/**
		 * 
		 *
		 * @return void
		 * @access public
		 */
		public function listarTodosParticipantes( ) {
		} // end of member function listarTodosParticipantes

		/**
		 * 
		 *
		 * @return int
		 * @access public
		 */
		public function contarNumeroDeParticipantes( ) {
		} // end of member function contarNumeroDeParticipantes

		/**
		 * 
		 *
		 * @return int
		 * @access public
		 */
		public function mairIdReserva( ) {
		} // end of member function mairIdReserva





} // end of ParticipanteDAO
?>
