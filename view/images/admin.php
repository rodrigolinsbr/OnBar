<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo "Taxa de ocupação atual :".$taxaDeOcupação."<br><br>";
?>

<div id="chart_div"></div>
<style type="text/css">
#chart_div{
background-color: #fff;	
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

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Ocupado', 13%],
          ['Livre', 87%]
          
        ]);

        // Set chart options
        var options = {'title':'Taxa de ocupação atual',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<?php
echo $consultarReservaExpirar;

?>
