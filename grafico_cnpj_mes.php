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

$anoesc = filter_input(INPUT_GET, "ano");
$result_niveis_ava = "select da_abertura, da_fantasia from empresas";
$resultado_niveis_ava = mysqli_query($conn, $result_niveis_ava);
while($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)){

	$array = explode('-', $row_niveis_ava['da_abertura']);
	$dia = $array[2];
	$mes = $array[1];
  	$ano = $array[0];
  	$continue = True;

  	while($continue){
	    if($anoesc == $ano){
	      	if($mes == '01'){
	        	$a++;
	        	$continue = False;
	      	} elseif ($mes == '02') {
	        	$b++;
	        	$continue = False;
	      	} elseif ($mes == '03') {
	        	$c++;
	        	$continue = False;
	      	} elseif ($mes == '04') {
	        	$d++;
	        	$continue = False;
	      	} elseif ($mes == '05') {
	        	$e++;
	        	$continue = False;
	      	} elseif ($mes == '06') {
		        $f++;
		        $continue = False;
	      	} elseif ($mes == '07') {
		        $g++;
		        $continue = False;
	      	} elseif ($mes == '08') {
		        $h++;
		        $continue = False;
	      	} elseif ($mes == '09') {
		        $i++;
		        $continue	 = False;
	      	} elseif ($mes == '10') {
		        $j++;
		        $continue = False;
	      	} elseif ($mes == '11') {
		        $k++;
		        $continue = False;
	      	} elseif ($mes == '12') {
		        $l++;
		        $continue = False;
	      	}
	    } elseif ($anoesc != $ano) {
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
          ['Mês', 'Quantidade de CNPJ no mês'],
          ['jan',      <?=$a?>],
          ['fev',      <?=$b?>],
          ['mar',      <?=$c?>],
          ['abr',      <?=$d?>],
          ['maio',     <?=$e?>],
          ['jun',      <?=$f?>],
          ['jul',      <?=$g?>],
          ['ago',      <?=$h?>],
          ['set',      <?=$i?>],
          ['out',      <?=$j?>],
          ['nov',      <?=$k?>],
          ['dez',      <?=$l?>],
        ]);

        var options = {
          title: 'Quantidade CNPJ cadastrados por período'
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="conteudo">
  		<h1>Gráfio de Quantidade de CNPJ por período</h1>

  		<p>
	        Digite o ano que deseja buscar:
	        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
	          	<input type="text" name="ano">
	      		<input type="submit" name="Buscar">
	        </form>
      	</p>

      	<div id="columnchart" style="width: 900px; height: 500px;"></div> 
    </div>
    
  </body>
</html>

