<?php  
 // crea un documento html, con un formulario en el que le pedirá al usuario que seleccione su color favorito, 
 // para el color del texto y el color del fondo. 
	if (isset($_GET['enviar'])) {
		$colores1 = $_GET['color-texto'];
		$colores2 = $_GET['color-fondo'];
		$colores_final = $colores1 . ' ' . $colores2;
		setcookie('colours',$colores_final);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	label{
		color: <?php  
			$cookie_value = $_COOKIE['colours'];
			$what = explode(' ', $cookie_value);
			echo $what[0];
		?>;
	}
	html{
		background-color: <?php 
			echo $what[1];
		?>;
	}
	</style>
</head>
<body>

	<form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
		<label for="male">Color texto</label>
		<input type="text" name="color-texto" id="male"><br>
		<label for="female">Color fondo</label>
		<input type="text" name="color-fondo" id="female"><br>
		<input type="submit" value="Enviar!" name="enviar">
	</form>

</body>
</html>