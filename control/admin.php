<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'model/ReservaDAO.php';
require_once 'model/Conexcao.php';

$numeroDeMesa = 15;
$con = new Conexcao(Controlador::$bancoServidor,  Controlador::$bancoNome,
        Controlador::$bancoUsuario, Controlador::$bancoSenha);


$reservaDao = new ReservaDAO($con->conec);

$numeroDereservas = $reservaDao->contarNumeroDeReservas();

//variavel que diz o quanto o bar esta ocupado
$taxaDeOcupação = round(($numeroDereservas/$numeroDeMesa)*100);

$reservaDao->listarTodasReservas();


$consultarReservaExpirar ="<table class='table table-bordered'>
                           <tr style='background-color:#cccccc ' >
                                <td><b>Cpf Cliente</b></td>
                                <td><b>Data</b></td>
                                <td><b>Hora de Inico</b></td>
                                <td><b>Hora Fim</b></td>
                                <td><b>Mesa</b></td>
                                <td><b>Liberar Mesa</b></td>
                           </tr>" ;
//echo var_dump($reservaDao->reservas);
foreach ($reservaDao->reservas as $value) {
    
    $consultarReservaExpirar.="<tr style='background-color:#ffffff '>
                                
                                <td width='5%' >".$value->cpfCliente."</td>
                                <td width='5%'>".date("d/m/y",$value->dataReserva)."</td>
                                <td width='5%'>".date("G:i:s",$value->horaInicio)."</td>
                                <td width='5%'>".date("G:i:s",$value->horaFim)."</td>
                                <td width='5%'>".$value->numeroDaReserva."</td>
                                <td width='5%'><a  href='#' class='btn  btn-default'><i 'class=icon-thumbs-up'></i> Liberar</a> </td>    
                           </tr>";
    
}





$consultarReservaExpirar .="</table>";


?>
