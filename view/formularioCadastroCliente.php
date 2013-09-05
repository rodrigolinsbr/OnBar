<form method="post" name="form1" action="index.php?pagina=11&numeroMesa=<?php echo Controlador::$queryString["numeroMesa"];?>">
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
            <td><input name="cpf" type="text" size="15" value="<?php echo Controlador::$queryString["cpf"]; ?>"></td>
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