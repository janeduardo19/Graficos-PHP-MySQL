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
$z = 0;
$aa = 0;

$query = "select ee_estado from empresas";
$result_query = mysqli_query($conn, $query);
while($row_query = mysqli_fetch_assoc($result_query)){
  if($row_query['ee_estado'] == 'AC'){
    $a++;
  } elseif ($row_query['ee_estado'] == 'AL') {
  	$b++;
  } elseif ($row_query['ee_estado'] == 'AP') {
  	$c++;
  } elseif ($row_query['ee_estado'] == 'AM') {
  	$d++;
  } elseif ($row_query['ee_estado'] == 'BA') {
  	$e++;
  } elseif ($row_query['ee_estado'] == 'CE') {
  	$f++;
  } elseif ($row_query['ee_estado'] == 'DF') {
  	$g++;
  } elseif ($row_query['ee_estado'] == 'ES') {
  	$h++;
  } elseif ($row_query['ee_estado'] == 'GO') {
  	$i++;
  } elseif ($row_query['ee_estado'] == 'MA') {
    $j++;
  } elseif ($row_query['ee_estado'] == 'MT') {
    $k++;
  } elseif ($row_query['ee_estado'] == 'MS') {
    $l++;
  } elseif ($row_query['ee_estado'] == 'MG') {
    $m++;
  } elseif ($row_query['ee_estado'] == 'PA') {
    $n++;
  } elseif ($row_query['ee_estado'] == 'PB') {
    $o++;
  } elseif ($row_query['ee_estado'] == 'PR') {
    $p++;
  } elseif ($row_query['ee_estado'] == 'PE') {
    $q++;
  } elseif ($row_query['ee_estado'] == 'PI') {
    $r++;
  } elseif ($row_query['ee_estado'] == 'RJ') {
    $s++;
  } elseif ($row_query['ee_estado'] == 'RN') {
    $t++;
  } elseif ($row_query['ee_estado'] == 'RS') {
    $u++;
  } elseif ($row_query['ee_estado'] == 'RO') {
    $v++;
  } elseif ($row_query['ee_estado'] == 'RR') {
    $w++;
  } elseif ($row_query['ee_estado'] == 'SC') {
    $x++;
  } elseif ($row_query['ee_estado'] == 'SP') {
    $y++;
  } elseif ($row_query['ee_estado'] == 'SE') {
    $z++;
  } elseif ($row_query['ee_estado'] == 'TO') {
    $aa++;
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
          ['Estado', 'Quantidade de Empresas'],
          ['AC',     <?=$a?>],
          ['AL',      <?=$b?>],
          ['AP',      <?=$c?>],
          ['AM',      <?=$d?>],
          ['BA',      <?=$e?>],
          ['CE',      <?=$f?>],
          ['DF',      <?=$g?>],
          ['ES',      <?=$h?>],
          ['GO',      <?=$i?>],
          ['MA',      <?=$j?>],
          ['MT',      <?=$k?>],
          ['MS',      <?=$l?>],
          ['MG',      <?=$m?>],
          ['PA',      <?=$n?>],
          ['PB',      <?=$o?>],
          ['PR',      <?=$p?>],
          ['PE',      <?=$q?>],
          ['PI',      <?=$r?>],
          ['RJ',      <?=$s?>],
          ['RN',      <?=$t?>],
          ['RS',      <?=$u?>],
          ['RO',      <?=$v?>],
          ['RR',      <?=$w?>],
          ['SC',      <?=$x?>],
          ['SP',      <?=$y?>],
          ['SE',      <?=$z?>],
          ['TO',      <?=$aa?>],
        ]);

        var options = {
          title: 'Quantidade>porcentagem de empresas por estado'
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

