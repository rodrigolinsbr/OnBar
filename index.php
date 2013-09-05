<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

    </head>
        <body>
        <?php 
            require_once 'control/Controlador.php';
            //Controlador::iniciaUseSession();
            Controlador::carregaConfigControlador("oper");
            Controlador::verificaUrl();
            Controlador::carregaTemplate("template1");
            Controlador::carregarCarregarView(Controlador::$view);

        ?>
            
</html>
