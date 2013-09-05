<?php
require_once 'Cliente.php';


/**
 * class Reserva
 * 
 */
class Reserva
{

		/** Aggregations: */

		/** Compositions: */

		 /*** Attributes: ***/

                /**
		 * 
		 * @access public
		 */
		public $id;

		/**
		 * 
		 * @access public
		 */
		public $cpfCliente;

		/**
		 * 
		 * @access public
		 */
		public $dataReserva;

		/**
		 * 
		 * @access public
		 */
		public $horaInicio;

		/**
		 * 
		 * @access public
		 */
		public $horaFim;

		/**
		 * 
		 * @access private
		 */
		public $numeroDaReserva;

                public function __construct($id,$cpfCliente,$dataReserva,$horaInicio,$horaFim,$numeroMesa){
                    $this->id = $id;
                    $this->cpfCliente = $cpfCliente;
                    $this->dataReserva = $dataReserva;
                    $this->horaInicio = $horaInicio;
                    $this->horaFim = $horaFim;
                    $this->numeroDaReserva = $numeroMesa;
                    
                }

                /**
		 * 
		 *
		 * @param Cliente cpf 

		 * @return bool
		 * @access public
		 */
		public function verifiaPrazoReserva($cpf) {
		} // end of member function verifiaPrazoReserva

                                 /**
		 * @return double
		 * @access public
		 */
		public function consultarTaxaDeOcupacao($numeroDeMesas,$mesasOcupadas) {
                    return $mesasOcupadas/$numeroDeMesas;
		} // end of member function consultarTaxaDeOcupacao

		/*
		 * @return void
		 * @access public
		 */
		public function reservarVaga( ) {
		} // end of member function reservarVaga





} // end of Reserva
?>
