<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		th{
			background-color: gray;
		}
		table{
			border: 1px solid black;
		}
		td{
			background-color: lightgray;
		}
	</style>
</head>
<body>

<table>
	<tr>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Fecha nacimiento</th>
	</tr>
	<?php 
		$usuarios = array(
			array("Joan", "Badia", "3/1/1990"),
			array("Pep", "Vila", "9/4/1989"),
			array("Pau", "Ruiz", "7/8/1986")
		);
		
		foreach ($usuarios as $usuario) {
			echo "<tr>";
			foreach ($usuario as $user => $valor) {
				echo "<td>";
				echo $valor;
				echo "</td>";
			}
			echo "</tr>";
		}

	?>
</table>

</body>
</html>