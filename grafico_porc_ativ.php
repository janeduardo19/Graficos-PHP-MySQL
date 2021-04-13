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
$j = 0;
$k = 0;
$l = 0;
$m = 0;
$n = 0;
$o = 0;
$p = 0;
$q = 0;
$r = 0;
$s = 0;
$t = 0;
$u = 0;
$v = 0;
$w = 0;
$x = 0;
$y = 0;

$result_niveis_ava = "select pc_atividades from empresas";
$resultado_niveis_ava = mysqli_query($conn, $result_niveis_ava);
while($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)){

	$array = explode(',', $row_niveis_ava['pc_atividades']);

	foreach ($array as $item) {
		if($item == 1){
			$a++;
		} elseif ($item == 2) {
			$b++;
		} elseif ($item == 3) {
			$c++;
		} elseif ($item == 4) {
			$d++;
		} elseif ($item == 5) {
			$e++;
		} elseif ($item == 6) {
			$f++;
		} elseif ($item == 7) {
			$g++;
		} elseif ($item == 8) {
			$h++;
		} elseif ($item == 9) {
			$i++;
		} elseif ($item == 10) {
			$j++;
		} elseif ($item == 11) {
			$k++;
		} elseif ($item == 12) {
			$l++;
		} elseif ($item == 13) {
			$m++;
		} elseif ($item == 14) {
			$n++;
		} elseif ($item == 15) {
			$o++;
		} elseif ($item == 16) {
			$p++;
		} elseif ($item == 17) {
			$q++;
		} elseif ($item == 18) {
			$r++;
		} elseif ($item == 19) {
			$s++;
		} elseif ($item == 20) {
			$t++;
		} elseif ($item == 21) {
			$u++;
		} elseif ($item == 22) {
			$v++;
		} elseif ($item == 23) {
			$w++;
		} elseif ($item == 24) {
			$x++;
		} elseif ($item == 25) {
			$y++;
		}
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
          ['atividades', 'Quantidade oferecida'],
          ['Acqua ride ',     <?=$a?>],
          ['Arvorismo',      <?=$b?>],
          ['Bóia Cross',      <?=$c?>],
          ['Bungee jump',      <?=$d?>],
          ['Caminhada',      <?=$e?>],
          ['Caminhada de longo curso',      <?=$f?>],
          ['Canoagem',      <?=$g?>],
          ['Canionismo',      <?=$h?>],
          ['Cachoeirismo',      <?=$i?>],
          ['Cicloturismo',      <?=$j?>],
          ['Escalada',      <?=$k?>],
          ['Espeleoturismo',      <?=$l?>],
          ['Flutuação',      <?=$m?>],
          ['Mergulho',      <?=$n?>],
          ['Observação da vida silvestre',      <?=$o?>],
          ['Turismo fora de estrada',      <?=$p?>],
          ['Paraquedismo',      <?=$q?>],
          ['Rafting',      <?=$r?>],
          ['Rapel',      <?=$s?>],
          ['Tirolesa',      <?=$t?>],
          ['Turismo equestre',      <?=$u?>],
          ['Vôo Livre',      <?=$v?>],
          ['Wind surf',      <?=$w?>],
          ['Kite surf',      <?=$x?>],
          ['Outras',      <?=$y?>],
        ]);

        var options = {
          title: 'Quantidade > porcentagem de atividades oferecidas'
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

