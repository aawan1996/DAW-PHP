<?php
if (isset($_POST['enviar'])) {
	$conexion = new mysqli('localhost','root','','ac02') or die ("bye");
	$resultado = $conexion->query("SELECT * FROM userpass WHERE tipo='administrador'");
	// Ya se que pertenece al user2 :)

	if ($resultado!=null){
		//En resultado una vista con los datos devueltos 
		while ($usuario = $resultado->fetch_assoc()) {

			if ($usuario['usuario']==$_POST['user'] && $_POST['password']==base64_decode($usuario['pass'])) {
				echo "";
			}else{
				header('Location: exercici2.php?error=1');
			}

			// if (base64_decode($usuario['pass']) == 'voyasuspender') {
			// 	echo "correcto";
			// }
			// print_r($usuario);
			// // echo "<script>alert('Contraseña es: ".base64_decode($usuario['pass'])."');</script>";
		}
	}else {
		echo "ERROR. Al ejecutar la consulta";
	}

}else{
	header('Location: exercici2.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style type="text/css">
				@import url(https://fonts.googleapis.com/css?family=Roboto:300);
		.login-page {
		  width: 360px;
		  padding: 8% 0 0;
		  margin: auto;
		}
		.form {
		  position: relative;
		  z-index: 1;
		  background: #FFFFFF;
		  max-width: 360px;
		  margin: 0 auto 100px;
		  padding: 45px;
		  text-align: center;
		  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.form input {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form button {
		  font-family: "Roboto", sans-serif;
		  text-transform: uppercase;
		  outline: 0;
		  background: #4CAF50;
		  width: 100%;
		  border: 0;
		  padding: 15px;
		  color: #FFFFFF;
		  font-size: 14px;
		  -webkit-transition: all 0.3 ease;
		  transition: all 0.3 ease;
		  cursor: pointer;
		}
		.form button:hover,.form button:active,.form button:focus {
		  background: #43A047;
		}

		body {
		  background: #76b852; /* fallback for old browsers */
		  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
		  background: -moz-linear-gradient(right, #76b852, #8DC26F);
		  background: -o-linear-gradient(right, #76b852, #8DC26F);
		  background: linear-gradient(to left, #76b852, #8DC26F);
		  font-family: "Roboto", sans-serif;
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;      
		}
	</style>

</head>
<body>
<div class="login-page">
  <div class="form">
	<form action="update.php" method="post" enctype="multipart/form-data">
		<input type="file" name="csv"  accept=".csv">
		<!-- <input type="submit" name="send" value="Upload"> -->
		<button type="submit" name="send" value="Upload">Upload</button>
		<br>
		<button type="submit" name="generarPdf" >Generar PDF</button>
	</form>
  </div>

</body>
</html>