<?php 
	$calves = array(
		array("1234"=> "1234"), 
		array("alumne"=> "austria"), 
		array("abdullah"=> "awan"), 
		array("hola"=> "adios")
	);


	if ($_POST) {
		$acertado = false;
		$usuario = $_POST['usuario'];
		$contra = $_POST['passwo'];

		foreach ($calves as $clave) {
			foreach ($clave as $user => $pass) {
				#$acertado=(($usuario == $user) && ($contra == $pass))?true:false;
				if ($usuario == $user && $contra == $pass) {
					$acertado = true;
				}
			}
		}

		if ($acertado == true) {
			echo "Bienvenido, los usuarios son: <br />";
			foreach ($calves as $clave) {
				foreach ($clave as $user => $pass) {
						echo $user . ' : ' . $pass . '<br />';
					}
				}
		}else{
			echo "Error: no eres usuario del sistema!";
		}
		

	}

 ?>
