 <img class="mesa"src="images/mesa_red.png" title="1">01
  <img class="mesa"src="images/mesa_red.png" title="2">02
  <img class="mesa"src="images/mesa_green.png" title="3">03
  <img class="mesa"src="images/mesa_green.png" title="4">04
  <img class="mesa"src="images/mesa_green.png" title="5">05
  <img class="mesa"src="images/mesa_green.png" title="6">06
  <img class="mesa"src="images/mesa_green.png" title="7">07
  <img class="mesa"src="images/mesa_green.png" title="8">08
  <img class="mesa"src="images/mesa_green.png" title="9">09
  <img class="mesa"src="images/mesa_red.png" title="10">10
  <img class="mesa"src="images/mesa_red.png" title="11">11
  <img class="mesa"src="images/mesa_red.png" title="12">12
  <img class="mesa"src="images/mesa_red.png" title="13">13
  <img class="mesa"src="images/mesa_red.png"title="14" >14
  <img class="mesa"src="images/mesa_red.png"title="15">15
  <br><br>

  <a  href="index.php" class="btn  btn-default "><i class="icon-arrow-left"></i> Voltar</a>
  <form method="post" name="form1" action="index.php?pagina=13">
    <table>
        <tr>
            <h1>Reservar Mesa</h1>
        </tr>
        <tr>
            <td><label for="cpfCliente">Cpf Cliente : </label></td>
            <td><input name="cpfCliente" type="text" size="15"></td>
        </tr>
        <tr>
            <td><label for="numMesa">Numero da Mesa: </label></td>
            <td><input name="numMesa" disabled="disabled" class="mesa_input" type="text" size="2" value =""></td>
        </tr>
        <tr>
            <td  valign="middle" align="center" colspan="2"><input type="submit" value="Cadastra Cliente"></td>
            <td></td>
        </tr>
    </table>
</form>

 <script type="text/javascript">
    $(".mesa").click(function(){
     var mesa= this.title;
     var image=this.src;
   
     if(image=='http://localhost/onBar/view/images/mesa_red.png'){
      alert("mesa ocupada campeão");
    }
      else{
         $(".mesa_input").attr('value', mesa);
      }
     
   
});

  </script>

<form method="post" name="form1" action="index.php?pagina=11">
    <table>
        <tr>
            <h1>Cadastrar Usuário</h1>
        </tr>
        <tr>
            <td><label for="nome">Nome : </label></td>
            <td><input name="nome" type="text" size="50"></td>
        </tr>
        <tr>
            <td><label for="cpf">Cpf : </label></td>
            <td><input name="cpf" type="text" size="15"></td>
        </tr>
        <tr>
            <td><label for="email">Email : </label></td>
            <td><input name="email" type="text" size="30"></td>
        </tr>
        <tr>
            <td><label for="senha">Senha : </label></td>
            <td><input name="senha" type="password" size="10"></td>
        </tr>
        <tr>
            <td  valign="middle" align="center" colspan="2"><input type="submit" value="Cadastra Cliente"></td>
            <td></td>
        </tr>
    </table>
</form>