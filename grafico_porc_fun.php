<?php

include 'conection.php';
$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;
$f = 0;
$g = 0;
$h = 0;
$i = 0;

$result_niveis_ava = "select pc_funcionarios from empresas";
$resultado_niveis_ava = mysqli_query($conn, $result_niveis_ava);
while($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)){
  if($row_niveis_ava['pc_funcionarios'] == 0){
    $a++;
  } elseif ($row_niveis_ava['pc_funcionarios'] <= 2) {
  	$b++;
  } elseif ($row_niveis_ava['pc_funcionarios'] <= 5) {
  	$c++;
  } elseif ($row_niveis_ava['pc_funcionarios'] <= 10) {
  	$d++;
  } elseif ($row_niveis_ava['pc_funcionarios'] <= 20) {
  	$e++;
  } elseif ($row_niveis_ava['pc_funcionarios'] <= 30) {
  	$f++;
  } elseif ($row_niveis_ava['pc_funcionarios'] <= 40) {
  	$g++;
  } elseif ($row_niveis_ava['pc_funcionarios'] <= 50) {
  	$h++;
  } elseif ($row_niveis_ava['pc_funcionarios'] > 50) {
  	$i++;
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
          ['Classificação', 'Quantidade'],
          ['Nenhum',     <?=$a?>],
          ['Até 2',      <?=$b?>],
          ['Até 5',      <?=$c?>],
          ['Até 10',      <?=$d?>],
          ['Até 20',      <?=$e?>],
          ['Até 30',      <?=$f?>],
          ['Até 40',      <?=$g?>],
          ['Até 50',      <?=$h?>],
          ['Mais que 50',      <?=$i?>]
        ]);

        var options = {
          title: 'Quantidade > porcentagem de funcionários que empregam'
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

