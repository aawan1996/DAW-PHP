<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	$fp = fopen("resultado.txt", "w");

	fputs($fp, $_GET['nombre'].'-'.$_GET['dni']."\n");
	for ($i=0; $i < $_COOKIE['contador']; $i++) {

		fputs($fp,$_GET["valor$i"]." ");
	}
	echo '<h3>Sr '.$_GET['nombre'].', su apuesta se ha realizado con éxito</h3>';

?>
</body>
</html>