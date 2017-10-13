<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		td{
			background-color: lightgreen;
		}
		th{
			background-color: #71af30;
		}
	</style>
</head>
<body>
<table>
<tr>
	<th>Nombre empleado</th>
	<th>Departamento</th>
	<th>Salario</th>
</tr>	
<?php 

	$empleados = array(
	    array('Powell, Alfredo','Administrativo',5500),
	    array('Pérez, Verónica','Administrativo',5200),
	    array('Goldstein, Juan','Recursos Humanos',6800),
	    array('Giaccomo, Walter','Recursos Humanos',6200),
	    array('Armani, Luis','Compras',10500),
	    array('Sarlanga, Horacio','Administrativo',5500),
	    array('Juárez, Alicia','Compras',7500),
	    array('Toselli, Agustina','Mantenimiento',5800),
	    array('Gómez, Valeria','Sistemas',4700),
	    array('Valverde, Emiliano','Recursos Humanos',5800),
	    array('Domínguez, Carlos','Mantenimiento',4900),
	    array('Carranza, Saúl','Administrativo',9500),
	);
	$gana_mas = "";
	$salario = 0;
	$sueldo_promedio=0;
	$empl_admin=0;
	$cont=0;
	$cont2 = 0;

//aumentar y depues motrar el saalrio medio? O antes mostrar y despues con otro for subir salario...
	foreach ($empleados as $empleado) {
		$sueldo_promedio += $empleado[2];
		
		if ($empleado[2] > $salario) {
			$salario = $empleado[2];
			$gana_mas = $empleado[0]; //no entiendo!
		}
		
			#echo '<br />';
			#echo $salario;11
		//echo '*'.$empleados[$cont2][2].'<br/>';
		$empleados[$cont2][2] = ($empleado[2] + ($empleado[2] * 0.25));
		if (strcmp($empleado[1], 'Administrativo') == 0) {
			$empl_admin += 1;
		}
		if (strcmp($empleado[1], 'Mantenimiento') == 0) {
			unset($empleados[$cont]);
		}
		$cont++;
		$cont2++;
		
	}
	$sueldo_promedio /= $cont;
	foreach ($empleados as  $empleado) {
		echo '<tr>';
		foreach ($empleado as $value) {
			echo '<td>';
			echo $value;
			echo '</td>';
		}
		echo '</tr>';
	}

 ?>
</table>
<?php 
	echo "El salario mas alto es: $salario <br />";
	echo "El salario mas alto es de: $gana_mas <br />";
	echo "El salario promedio es: $sueldo_promedio <br />";
	echo "Hay $empl_admin empleados administrativos <br />";
?>
</body>
</html>