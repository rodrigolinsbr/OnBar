<?php


/**
 * class Cliente
 * 
 */
class Cliente
{

                 /** 
		 * @access public
		 */
		public $id;


		/**
		 * @access public
		 */
		public $nome;

		/**
		 * @access public
		 */
		public $cpf;

		/**
		 * @access public
		 */
		public $email;
		
                /**
		 * @access public
		 */
		public $senha;

                
                public function __construct($id,$nome,$email,$cpf,$senha) {
                    
                    $this->id = $id;
                    $this->nome = $nome;
                    $this->email = $email;
                    $this->cpf = $cpf;
                    $this->senha = $senha;                    
                }





} // end of Cliente
?>
