<?php  
	session_start();
	if (isset($_POST['enviar'])) {
		$_SESSION['nombre'] = $_POST['nombreUsuario'];
		$_SESSION['contrasenya'] = $_POST['contrasenya'];


		$final = array();
		$file_handle = fopen("usuarios/usuarios.txt", "r");

		for ($i = 0; !feof($file_handle); $i++) {
			$line = fgets($file_handle);

			$man = explode('-', $line);
			// echo "El length del despues explode".strlen($man[$i]);
			// $otro = trim($man[$i]);s
			// echo "El length del despues trim".strlen($otro);
			$aux = array(trim($man[0])=>trim($man[1]));
			$final = array_merge_recursive($aux,$final);
		}
		echo strlen($_SESSION['nombre']);
		echo strlen($_SESSION['contrasenya']);
		echo "<br />";
		fclose($file_handle);

		echo '<pre>';
		print_r($final);
		echo '</pre>';
		foreach ($final as $key => $value) {
			if (strcmp($_SESSION['nombre'] , $key)==0 && strcmp($_SESSION['contrasenya'], $value)==0) {
				$bien = 1;
				
			}
		}
		if ($bien == 1){
			header('Location: validado.php');
		}else{
			header('Location: main.php?usererror=1');
		}

	}else{
		header('Location: main.php');
	}

?>