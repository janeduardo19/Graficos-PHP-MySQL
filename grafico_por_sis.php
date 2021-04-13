<?php

include 'conection.php';
$x = 0;
$y = 0;

$result_niveis_ava = "select pc_tem_sistema from empresas";
$resultado_niveis_ava = mysqli_query($conn, $result_niveis_ava);
while($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)){
  if($row_niveis_ava['pc_tem_sistema'] == 1){
    $x++;
  }else {
    $y++;
  }
}

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Tem sistema', 'Quantidade de empresas'],
          ['Sim',     <?=$x?>],
          ['Não',      <?=$y?>]
        ]);

        var options = {
          title: 'Quantidade > porcentagem que possuem sistema implementado'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

