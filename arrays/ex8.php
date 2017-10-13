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
		<th>Nombre Equipo</th>
		<th>Partidos Jugados</th>
		<th>Ganados</th>
		<th>Empatados</th>
		<th>Perdidos</th>
		<th>Goles a favor</th>
		<th>Goles en contra</th>
		<th>Puntos sumados</th>
	</tr>
<?php 
	$vecesjugadas_bcn=0;
	$vecesjugadas_rm=0;
	$vecesjugadas_lv=0;
	//partidos ganados perdidos o empatados de barcelona
	$bcn_ganado = 0;
	$bcn_perdido = 0;
	$bcn_empate = 0;
	//partidos ganados perdidos o empatados de liverpool
	$lv_ganado = 0;
	$lv_perdido = 0;
	$lv_empate = 0;
	//partidos ganados perdidos o empatados de Real Madrid
	$rm_ganado = 0;
	$rm_perdido = 0;
	$rm_empate = 0;
	//Puntos sumados
	$rm_puntos = 0;
	$bcn_puntos = 0;
	$lv_puntos = 0;
	//Goles a favor
	$bcn_goles_favor = 0;
	$rm_goles_favor = 0;
	$lv_goles_favor = 0;
	//Goles en contra
	$bcn_goles_contra = 0;
	$rm_goles_contra = 0;
	$lv_goles_contra = 0;

	$resultados = array(
		#      EL        GCL     EV            GCV
	    array('Barcelona',4,'Manchester United',0),
	    array('Real Madrid',2,'Liverpool',2),
	    array('Barcelona',1,'Real Madrid','0'),
	    array('Liverpool',2,'Manchester United',0),
	    array('Liverpool',1,'Barcelona',2),
	    array('Real Madrid',0,'Villarreal',15)
	);

	foreach ($resultados as $partido) {
		if (strcmp($partido[0], 'Barcelona')==0) {
			$vecesjugadas_bcn+=1;
			if ($partido[1] > $partido[3]) {
				$bcn_puntos += 3;
				$bcn_ganado += 1;
			}elseif ($partido[1] == $partido[3]){
				$bcn_puntos += 1;
				$bcn_empate += 1;
			}else{
				$bcn_perdido += 1;
			}
			if ($partido[1] - $partido[3] > 0 ) {
				$bcn_goles_favor += ($partido[1] - $partido[3]);
			}elseif($partido[1] - $partido[3] < 0){
				$bcn_goles_contra += $partido[1] - $partido[3];
				$bcn_goles_contra -= $bcn_goles_contra + $bcn_goles_contra;
			}
		}elseif (strcmp($partido[0], 'Real Madrid')==0){
			$vecesjugadas_rm+=1;
			if ($partido[1] > $partido[3]) {
				$rm_ganado += 1;
				$rm_puntos += 3;
			}elseif ($partido[1] == $partido[3]){
				$rm_puntos += 1;
				$rm_empate += 1;
			}else{
				$rm_perdido += 1;
			}
			if ($partido[1] - $partido[3] > 0 ) {
				$rm_goles_favor += ($partido[1] - $partido[3]);
			}elseif($partido[1] - $partido[3] < 0){
				$rm_goles_contra += $partido[1] - $partido[3];
				$rm_goles_contra -= $rm_goles_contra + $rm_goles_contra;
			}
		}elseif (strcmp($partido[0], 'Liverpool')==0){
			$vecesjugadas_lv+=1;
			if ($partido[1] > $partido[3]) {
				$lv_ganado += 1;
				$lv_puntos += 3;
			}elseif ($partido[1] == $partido[3]){
				$lv_puntos += 1;
				$lv_empate += 1;
			}else{
				$lv_perdido += 1;
			}
			if ($partido[1] - $partido[3] > 0 ) {
				$lv_goles_favor += ($partido[1] - $partido[3]);
			}elseif($partido[1] - $partido[3] < 0){
				$lv_goles_contra += $partido[1] - $partido[3];
				$lv_goles_contra -= $lv_goles_contra + $lv_goles_contra;
			}
	}
	}

	//Guardo en un array todo los resultados para que me sea mas facil mostrarlos en tabla
	$finales = array(
		array('Barcelona',$vecesjugadas_bcn,$bcn_ganado,$bcn_empate,$bcn_perdido,$bcn_goles_favor,$bcn_goles_contra,$bcn_puntos), 
		array('Real Madrid',$vecesjugadas_rm,$rm_ganado,$rm_empate,$rm_perdido,$rm_goles_favor,$rm_goles_contra,$rm_puntos), 
		array('Liverpool',$vecesjugadas_lv,$lv_ganado,$lv_empate,$lv_perdido,$lv_goles_favor,$lv_goles_contra,$lv_puntos)

	);
	foreach ($finales as $key => $row) {
    	$aux[$key] = $row[7];
	}	

	array_multisort($aux, SORT_DESC, $finales);


	foreach ($finales as $final) {
		echo '<tr>';
		foreach ($final as $pos => $value) {
			echo '<td>'.$value.'</td>';
		}
		echo '</tr>';
	}
 ?>
 </table>
</body>
</html>
