<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		td,th{
			background-color: lightgreen;
			padding: 10px;
		}
	</style>
</head>
<body>
<table>
	<tr>
		<th>Equipo</th>
		<th>Puntos</th>
	</tr>
<?php 
	$equipos = array(
		 $_GET['nombre_equipo1'] => $_GET['punto_equipo1'],
		 $_GET['nombre_equipo2'] => $_GET['punto_equipo2'],
		 $_GET['nombre_equipo3'] => $_GET['punto_equipo3'],
		 $_GET['nombre_equipo4'] => $_GET['punto_equipo4'],

	);
	foreach ($equipos as $key => $value) {
		echo '<tr>';
		echo '<td>'.$key.'</td>';
		echo '<td>'.$value.'</td>';
		echo '</tr>';
	}
	$diferencia = $_GET['punto_equipo1'] - $_GET['punto_equipo4'];
	echo "La diferencia de puntos entre el primero y ultimo es: ".+$diferencia;
?>
</table>
</body>
</html>