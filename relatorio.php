<?php
	include 'conection.php';

	$conteudo .= '<table border="1"';
	$conteudo .= '<thead>';
	$conteudo .= '<tr>';
	$conteudo .= '<td> NOME DA EMPRESA </td>';
	$conteudo .= '<td> DATA DE CADASTRO </td>';
	$conteudo .= '</tr>';
	$conteudo .= '</thead>';

	$anoesc = filter_input(INPUT_GET, "anoesc");

	//INSTRUÇÕES SQL
	$dados_sala = "select da_fantasia, da_abertura from empresas";

	//EXECUTAR A QUERY
	$resultados = mysqli_query($conn, $dados_sala);

	//VERIFICAR O RESULTADO
	if($resultados === FALSE){
		echo "Falha na conexão";
	}

	//PERCORRER O RESULTADO
	while ($row_dados = mysqli_fetch_assoc($resultados)) {

		$array = explode('-', $row_dados['da_abertura']);
		$dia = $array[2];
		$mes = $array[1];
	  	$ano = $array[0];

	  	if ($ano == $anoesc) {
	  		$conteudo .= '<tbody>';
			$conteudo .= '<tr><td>' . $row_dados['da_fantasia'] . "</td>";
			$conteudo .= '<td>' . "$dia-$mes-$ano" . "</td></tr>";
			$conteudo .= '</tbody>';	
	  	}
	}

	$conteudo .= '</table>';

	//AUTOLOAD DO COMPOSER
	require __DIR__.'/vendor/autoload.php';

	use Dompdf\Dompdf;
	use Dompdf\Options;

	//INSTANCIA DO OPTIONS
	$options = new Options();
	$options->setChroot(__DIR__);

	//INSTANCIA DE DOMPDF
	$dompdf = new Dompdf($options);

	//CARREGA O HTML PARA DENTRO DA CLASSE
	$dompdf->load_html('
		<h1 style="text-align: center;"> Hello World em PDF </h1>
		'. $conteudo .'
	');

	//RENDERIZAR O ARQUIVO PDF
	$dompdf->render();

	//IMPRIME O CONTEUDO DO PDF NA TELA
	header('Content-type: application/pdf');
	echo $dompdf->output();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

	</body>
</html>