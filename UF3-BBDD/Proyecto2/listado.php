<?php 
	$conexion = new mysqli('localhost','root','','proyecto2');
	function mostrar(){
		$conexion = new mysqli('localhost','root','','proyecto2');
		$aux = $_GET['registro'];
		// echo $aux;
		// $consulta = "SELECT tarticulos.CodArt, tarticulos.PVP, tarticulos.CodFami, tartculos.Artículo, tarticulos.Stock FROM tarticulos NATURAL JOIN tfamilias
		// WHERE (tfamilias.familia='".$aux."')";
		$consulta = "SELECT CodArt, PVP, CodFami, Articulo, Stock FROM tarticulos WHERE CodFami = (SELECT CodFami FROM tfamilias WHERE familia='".$aux."');";
		$resultado = $conexion->query($consulta);
		echo mysqli_error($conexion);
		if ($resultado!=null){
			$cont = 0;
			echo '<div id="main2">';
			echo "<h3>Datos:</h3>";
			//En resultado una vista con los datos devueltos 
			while ($usuario = $resultado->fetch_assoc()) {
				
				echo '<form action="editar.php" method="get">';
					echo 'Articulo:<input class="form-control form-control-sm" type="text" value="'.$usuario['Articulo'].'" readonly name="Articulo">'.'<br>';
					echo 'CodigoArituclo:<input type="text" class="form-control form-control-sm" value="'.$usuario['CodArt'].'" readonly name="CodArt">'.'<br>';
					echo 'Precio:<input type="text" class="form-control form-control-sm" value="'.$usuario['PVP'].'" readonly name="PVP">'.'<br>';
					echo '<input type="hidden" value="'.$usuario['Stock'].'" readonly name="Stock">'.'<br>';
					echo '<input type="hidden" value="'.$usuario['CodFami'].'" readonly name="CodFami">'.'<br>';
					echo '<input type="hidden" value="'.$cont.'" readonly name="valorCambiar">'.'<br>';
					echo '<input id="si" class="btn btn-outline-info" type="submit" name="cambiar'.$cont.'" value="Consultar">';
					echo '<br>';
				echo '</form>';
				$cont++;
			}
			echo '</div ">';

		}else{
			echo "joder";
		}

	}
	if(isset($_GET['mostrar'])){
		mostrar();
	}
	if (isset($_GET['ok'])) {
		if ($_GET['ok'] == 1){
			echo "
            	<script type=\"text/javascript\">
            		alert('Datos actualizados correctamente!');
            	</script>
        ";
		}
	}
	$error = $conexion->connect_errno;
	if ($error!=null){
		echo "ERROR";
		exit();
	}else{
		$consulta = "SELECT * FROM tFamilias ";
		//echo $consulta."<br>";
		$resultado = $conexion->query($consulta);

		

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style type="text/css">
		#button1{
			margin-left: 15px;
			font-weight: bold;
		}
		.form-control{
			margin-bottom: -20px;
			width: 50%;
		}
		#main2 form input{
			margin-left: 170px;
		}
		#main2 form input:last-child{
			margin-right: 150px;
		}
		#si{
			margin-top: -30px;
			font-weight: bold;
		}
		select{
			margin-bottom: 20px;
		}
		select{
			height: 35px;
		}
		.titulo-registro{
			margin-bottom: -10px;
		}
		#main{
			margin-top: 150px;
			top: 50%;
			left: 50%;
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			width: 50%;
			color: black;
			font-weight: bold;
			width:40%;
			background: #d8f1d0;
		}
		.titulo-registro{
		}
		#main2{
			margin-bottom: -100px;
			font-weight: bold;
			margin-top: 20px;
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			width: 50%;
			background: #d8f1d0;

		}
		#si{
			margin-bottom: 10px;
		}
		body{
background: #808080;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3fada8, #808080);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3fada8, #808080); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



		}
	</style>
</head>
<body>
	<div id="main">
   <p class="titulo-registro">Por favor, selecciona:</p><br /> 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
   <select name="registro">    
   		<?php 
			$consulta = "SELECT * FROM tFamilias ";
			//echo $consulta."<br>";
			$resultado = $conexion->query($consulta);
			if ($resultado!=null){
				//En resultado una vista con los datos devueltos 
				while ($usuario = $resultado->fetch_assoc()) {
					echo '<option value="'.$usuario['Familia'].'">'.$usuario['Familia'].'</option>';
				}
			}
   		?>
   </select>
   <button name="mostrar" id="button1" class="btn btn-outline-dark">MOSTRAR</button>

</form>
</div>
</body>
</html>