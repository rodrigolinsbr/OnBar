

  <br><br>



  <a  href="index.php" class="btn  btn-default "><i class="icon-arrow-left"></i> Voltar</a>
 <div id="dialog" class="dialog" title="Reserva">
  <form class="form_reserva" method="post" name="form1" action="index.php?pagina=13">

    <table>

        <tr>

            <h3>Reservar Mesa</h3>

        </tr>

        <tr>

            <td><label for="cpfCliente">Cpf Cliente : </label></td>

            <td><input name="cpfCliente" type="text" size="15" value="<?php if(isset($_GET['cpf'])){echo $_GET['cpf'];}?>" ></td>

        </tr>

        <tr>

            <td><label for="senha">Senha: </label></td>

            <td><input name="senha"  type="password" size="1" value =""></td>

        </tr>

        <tr>

            <td><label for="numMesa">Numero da Mesa: </label></td>

            <td><input name="numMesa" class="mesa_input" type="text" size="2" value =""></td>

        </tr>

        <tr>

            <td  valign="middle" align="center" colspan="2"><input type="submit" value="Reservar Mesa"></td>

            <td></td>

        </tr>

    </table>

</form>
</div>
<div id="dialog_mesa_ocupada" class="dialog" title="Reserva">
    <h3> Mesa ocupada!</h3>
</div>





 <script type="text/javascript">

    $(".mesa").click(function(){
      var mesa= this.title;
      var image=this.src;

     if(image=='http://www.camaleonsolucoes.com.br/clientesx/onbar/view/images/mesa_red.png'){
           $("#dialog").hide();
           $("#dialog_mesa_ocupada").dialog({
                modal: true,
                buttons: {
                Ok: function() {
                $( this ).dialog( "close" );
                }
                }
          });
   }
    else{

        $(".mesa_input").attr('value', mesa);
        $("#dialog").dialog({
         
            width: 450,
            show: "fade",
            hide: "fade",
            modal: true
        });

      }

});
</script>