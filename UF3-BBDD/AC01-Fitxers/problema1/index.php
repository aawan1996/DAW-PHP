<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="get" action="MiApuesta.php">
<table>
<tr>
	<th>Primer equipo</th>
	<th>Segundo equipo</th>
</tr>
<?php 

	$file = fopen("a.txt", "r");
	$i = 0;
	while(!feof($file)){
		echo '<tr>';
		$linea = fgets($file);
		$portion = explode(" ", $linea,2);
		echo '<td>'.$portion[0].'</td>';
		echo '<td>'.$portion[1].'</td>';
		echo '<td>'.'<input type="text" name="'."valor".$i.'">'.'</td>';

		echo '</tr>';
		$i++;
	}
	setcookie("contador",$i);

?>
</table>
	Inserta el nombre: <input type="text" name="nombre">
	<br>
	Inserta el DNI: <input type="text" name="dni">
	<br>
	<input type="submit" name="apostar" value="Apostar">
</form>
</body>
</html>