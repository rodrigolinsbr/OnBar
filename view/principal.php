<div id="inicio">
<div class="cycle">
  <table>
    <tr>
      <td width="330">
        <canvas id="canvas" width="274" height="295"></canvas>
      </td>
        <td width="400">

          <h2>Prezado Usuário,</h2><h3> 
Seja bem vindo ao novo sistema de reservas OnBar, com o seu CPF você terá acesso a reservas em mais de 2 Bares espalhados por Recife, das mais 
diversas redes e categorias. 
Siga passo a passo este manual, que lhes facilitará a navegação por nosso sistema. </h3>
      </td>

    </tr>
    
  </table>
</div> 
<div class="cycle">
  <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
  </div>
 <div class="cycle">

  <table>
    <tr>
      <td>
        <img class="mesa_g"src="images/mesa_red_g.png" width='300'>
      </td>
        <td>
          <h1>Cadeiras vermelhas</h1><br><br><h3>Infelizmente a mesa está ocupada.<br>
            Alguarde alguns instantes e tente <br>novamente...</h3><br>
      </td>

    </tr>
    
  </table>
    
</div>
<div class="cycle">
  <table>
    <tr>
      <td>
        <div id="profundidade">
          <img class="mesa_g"src="images/mesa_green_g.png" width="300">
        </div>
      </td>
        <td>
          <h1>Cadeiras verdes</h1><br><br><h3>Mesa livre, fique avontade para fazer<br> a reserva!</h3>
      </td>

    </tr>
    
  </table>
  
</div>
<div class="cycle">
  <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
  
  <a  href="index.php?pagina=reserva" class="btn  btn-default "><i class="icon-thumbs-up"></i> Reservar agora!</a>
  </div>
</div>

<div class="btn-group">
       <button type="button" class="btn  btn-default voltar"><i class="icon-chevron-left"></i> Voltar</button>
      <button type="button" class="btn btn-default passar ">Próximo <i class="icon-chevron-right"></i></button>
</div>
<script type="text/javascript">
$("#inicio").cycle({

        fx:      'fade',

        timeout:  0,

        prev:    '.voltar',

        next:    '.passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };
</script>

