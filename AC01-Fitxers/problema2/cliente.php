<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="get" action="pedido.php">
<table>
<tr>
	<th>Producto</th>
	<th>Cantidad</th>
	<th>A pedir:</th>
</tr>
<?php 

	$file = fopen("b.txt", "r");
	$i = 0;
	while(!feof($file)){
		echo '<tr>';
		$linea = fgets($file);
		$portion = explode(" ", $linea);
		echo '<td>'.$portion[0].'</td>';
		echo '<td>'.$portion[1].'</td>';
		echo '<td>'.'<input type="text" name="'."valor".$i.'">'.'</td>';

		echo '</tr>';
		$i++;
	}
	setcookie("contador",$i);

?>
</table>
<br><br>
	Inserta el codigo cliente: <input type="text" name="nombre">

	<br>
	<input type="submit" name="apostar" value="Pedir">
</form>
</body>
</html>