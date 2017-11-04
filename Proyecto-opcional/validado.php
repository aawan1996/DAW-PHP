<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		img{
			height: 100px;
			width: 100px;
		}

		input[type=text], select, input[type=password]{
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit] {
		    width: 100%;
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}

		input[type=submit]:hover {
		    background-color: #45a049;
		}
		div {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 20px;
		}
	</style>
</head>
<body>
<form action="actualizarperfil.php" method="post">
	<?php  

		session_start();
		// echo $_SESSION['nombre'];
		// echo $_SESSION['contrasenya'];
		$archivo = 'ficheros-user/'.$_SESSION['nombre'].'.txt';

		$imagen = $_SESSION['nombre'].'.png';
		$_SESSION['archivo-perfil']=$archivo;

		$final = array();
		$file_handle = fopen($archivo, "r");

		for ($i = 0; !feof($file_handle); $i++) {
			$line = fgets($file_handle);

			// $man = explode('-', $line);
			// echo "El length del despues explode".strlen($man[$i]);
			// $otro = trim($man[$i]);
			// echo "El length del despues trim".strlen($otro);
			$aux = array(trim($line));
			$final = array_merge_recursive($aux,$final);

		}
		// echo '<pre>';
		// print_r($final);
		// echo '</pre>';

		// echo "<input type='text' name='name' value="$final[2]">
		echo '<div><img src="'.'img/'.$imagen.'"></div>';
		echo '<input type="text" name="nombre" value="'.$final[2].'">'. '<br>';

		echo '<input type="text" name="direccion" value="'.$final[1].'">'. '<br>';
		echo '<input type="text" name="cardNumber" value="'.$final[0].'">'. '<br>';
		echo '<input type="submit" name="guardar" value="Guardar">';
		echo '<input type="submit" name="salir" value="Salir">';



	?>	



</form>
</body>
</html>

