<?php  

if (isset($_GET['apostar'])) {

	$fp = fopen("stock.txt", "w");
	$file = fopen("b.txt", "r");
	fputs($fp,$_GET['nombre']."\n");


	$i = 0;
	while(!feof($file)){
		echo '<tr>';
		$linea = fgets($file);
		$portion = explode(" ", $linea);
		fputs($fp, $portion[0]." ");

		$var = "valor$i";
		$$var = $_GET["valor$i"];
		if (empty($$var)){
			$$var = 0;
		}else{
			$$var = $_GET["valor$i"];
		}
		fputs($fp, $$var." ");

		echo '</tr>';
		$i++;
	}

	echo '<h3>Pedido recibido!<h3>';

}

?>