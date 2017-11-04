<?php  
	session_start();
	if (isset($_POST['dato-usuario-enviar'])){

		//Imagen
		// $img = $_FILES['imagen']['name'];	

			if (isset($_FILES['imagen'])){
				move_uploaded_file($_FILES['imagen']['tmp_name'], 'img/'.$_POST['oculto'].'.png');
			}
			// echo $_FILES['imagen']['name'];
			echo $_POST['oculto'];
			echo '<pre>';
			print_r( $_FILES);
			echo '</pre>';


			$archivoUsuario = $_POST['oculto'].'.txt';
			$file_handle = fopen('ficheros-user/'.$archivoUsuario, "w");

			fwrite($file_handle, $_POST['name']."\n");
			fwrite($file_handle, $_POST['direccion']."\n");
			fwrite($file_handle, $_POST['tarjeta']);


			header('Location: main.php?creado=1');
		
	}else{
		header('Location: main.php');
	}




?>