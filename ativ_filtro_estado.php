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

$estadoesc = filter_input(INPUT_GET, "estado");
$result_niveis_ava = "select pc_atividades, ee_estado from empresas";
$resultado_niveis_ava = mysqli_query($conn, $result_niveis_ava);
while($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)){

	$array = explode(',', $row_niveis_ava['pc_atividades']);
	$continue = True;

	while ($continue) {
		if($estadoesc == $row_niveis_ava['ee_estado']){
		foreach ($array as $item) {		
			if($item == 1){
				$a++;
				$continue = False;
			} elseif ($item == 2) {
				$b++;
				$continue = False;
			} elseif ($item == 3) {
				$c++;
				$continue = False;
			} elseif ($item == 4) {
				$d++;
				$continue = False;
			} elseif ($item == 5) {
				$e++;
				$continue = False;
			} elseif ($item == 6) {
				$f++;
				$continue = False;
			} elseif ($item == 7) {
				$g++;
				$continue = False;
			} elseif ($item == 8) {
				$h++;
				$continue = False;
			} elseif ($item == 9) {
				$i++;
				$continue = False;
			} elseif ($item == 10) {
				$j++;
				$continue = False;
			} elseif ($item == 11) {
				$k++;
				$continue = False;
			} elseif ($item == 12) {
				$l++;
				$continue = False;
			} elseif ($item == 13) {
				$m++;
				$continue = False;
			} elseif ($item == 14) {
				$n++;
				$continue = False;
			} elseif ($item == 15) {
				$o++;
				$continue = False;
			} elseif ($item == 16) {
				$p++;
				$continue = False;
			} elseif ($item == 17) {
				$q++;
				$continue = False;
			} elseif ($item == 18) {
				$r++;
				$continue = False;
			} elseif ($item == 19) {
				$s++;
				$continue = False;
			} elseif ($item == 20) {
				$t++;
				$continue = False;
			} elseif ($item == 21) {
				$u++;
				$continue = False;
			} elseif ($item == 22) {
				$v++;
				$continue = False;
			} elseif ($item == 23) {
				$w++;
				$continue = False;
			} elseif ($item == 24) {
				$x++;
				$continue = False;
			} elseif ($item == 25) {
				$y++;
				$continue = False;
			}
		}
	} elseif ($estadoesc != $row_niveis_ava['ee_estado']) {
		$continue = False;
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
		          	['Atividades', 'Quantidade oferecida'],
		          	['Acqua ride ',     <?=$a?>],
		          	['Arvorismo',      <?=$b?>],
		          	['B??ia Cross',      <?=$c?>],
		          	['Bungee jump',      <?=$d?>],
		          	['Caminhada',      <?=$e?>],
		          	['Caminhada de longo curso',      <?=$f?>],
		          	['Canoagem',      <?=$g?>],
		          	['Canionismo',      <?=$h?>],
		          	['Cachoeirismo',      <?=$i?>],
		          	['Cicloturismo',      <?=$j?>],
		          	['Escalada',      <?=$k?>],
		          	['Espeleoturismo',      <?=$l?>],
		          	['Flutua????o',      <?=$m?>],
		          	['Mergulho',      <?=$n?>],
		          	['Observa????o da vida silvestre',      <?=$o?>],
		          	['Turismo fora de estrada',      <?=$p?>],
		          	['Paraquedismo',      <?=$q?>],
		          	['Rafting',      <?=$r?>],
		          	['Rapel',      <?=$s?>],
		          	['Tirolesa',      <?=$t?>],
		          	['Turismo equestre',      <?=$u?>],
		          	['V??o Livre',      <?=$v?>],
		          	['Wind surf',      <?=$w?>],
		          	['Kite surf',      <?=$x?>],
		          	['Outras',      <?=$y?>],
		        ]);

		        var options = {
		          	title: 'No de atividades por estado'
		        };

		        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));

	        	chart.draw(data, options);
	      	}
		</script>
	</head>
	<body>
		<div id="conteudo">
			<h1>Gr??fio de Quantidade de Atividades por Estado</h1>

	  		<p>
		        Digite o estado pelo qual deseja filtrar:
		        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
		          	<input type="text" name="estado">
		      		<input type="submit" name="Buscar">
		        </form>
	      	</p>

	      	<div id="columnchart" style="width: 900px; height: 500px;"></div> 
		</div>
	</body>
</html>