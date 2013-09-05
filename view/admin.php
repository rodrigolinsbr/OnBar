<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo "Taxa de ocupação atual :".$taxaDeOcupação."<br><br>";
echo "<span class='result'>".$taxaDeOcupação."</span>";
?>
<h5>Gráficos</h5>

<div id="chart_div"></div>
<style type="text/css">
#chart_div{
background-color: #fff;	
border: 1px #ccc solid;
border-radius: 4px;
}
.result{
	display: none;
}

</style>
   <script type="text/javascript">
   	
   	
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
      	var ocupacao = parseInt($('.result').html());
      	var resto = 100 - ocupacao;

      	
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Ocupado',ocupacao],
          ['Livre', resto]
          
        ]);

        // Set chart options
        var options = {'title':'Taxa de ocupação',
         				'is3D': true,
         				colors: ['#C24949', '#90C140'],
  
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <br><br>
    <h5>Tabela de Reservas</h5>
<?php
echo $consultarReservaExpirar;

?>
