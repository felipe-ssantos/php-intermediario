<!DOCTYPE html>
<html lang="pt_BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Date</title>
</head>

<body>
	<?php
	/*
	 * Trabalhando com datas
	 */	

	 date_default_timezone_set('America/Sao_Paulo');	 
	 
	 $data = date('d/m/Y H:i:s');
	 echo $data;
	 
	 
	/*
	   $titulo_site = 'Titulo do meu site';
	   include('header.php');
	   */
	?>

	<h1>Meu conteudo da home!</h1>

	<?php
	include('footer.php');
	?>
</body>

</html>