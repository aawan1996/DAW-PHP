<?php  
$cambiar = "cambiar".$_GET['valorCambiar'];

if (isset($_GET[$cambiar])) {
	$Articulo = $_GET['Articulo'];
	$CodArt = $_GET['CodArt'];
	$PVP = $_GET['PVP'];
	$Stock = $_GET['Stock'];
	$CodFami = $_GET['CodFami'];

}else{
	echo "no";
}
// if (isset($_GET['ok'])) {
// 	if($_GET['ok'] == 0){
// 		echo '<h2>Algo ha ido mal...<h2>';
// 	}
// }
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style type="text/css">
		body{
			background: #1D976C;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}
			.form-control{
			margin-bottom: -20px;
			width: 50%;
		}
		button{
			margin-top: -90px;
		}
		#hi{
			margin-top: 150px;
			top: 50%;
			left: 50%;
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			width: 50%;
			background: #d8f1d0;
		}
		#hi input{
			margin-left: 170px;
		}
	</style>
</head>
<body>
<div id="hi">
<form action="actualizar.php" method="get">
	<h4>Realiza tus cambios aquí</h4>
	Codigo:   <input class="form-control form-control-sm" value="<?php echo $CodArt ?>" name="CodArt""> <br>
	Articulo: <input class="form-control form-control-sm"  value="<?php echo $Articulo ?>" name="Articulo""> <br>
	Articulo: <input type="hidden" class="form-control form-control-sm"  value="<?php echo $Articulo ?>" name="art""> <br>
	Precio:   <input class="form-control form-control-sm"  value="<?php echo $PVP ?>" name="PVP""> <br>
	Stock:   <input class="form-control form-control-sm"  value="<?php echo $Stock ?>" name="Stock""> <br>
	   <input type="hidden" value="<?php echo $CodFami ?>" name="CodFami""> <br>
	<br><br>
	<button type="submit" class="btn btn-outline-success" name="cambiar" value="Cambiar">Cambiar</button>
	<button type="submit" class="btn btn-outline-danger"  id="boton2" name="cancelar" value="Cancelar">Cancelar</button>
</form>
</div>
</body>
</html>
