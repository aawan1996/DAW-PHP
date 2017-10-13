<?php 


	$pares=array();
	$cont=0;
	for ($i=2; $i <= 20 ; $i+=2) { 
		array_push($pares, $i);
		echo $pares[$cont] . '<br />';
		$cont++;
	}

//Los imprimo con for each tamben.. No sabia con que metodo lo querias..

//	foreach ($pares as $numero) {
//		echo $numero.'<br />';
//	}

 ?>