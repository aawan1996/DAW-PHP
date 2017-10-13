<?php 
	$counter=1;
	if (isset($_GET['enviar'])) {
		if (isset($_COOKIE['contador'])) {
			$counter = $_COOKIE['contador'];
			$user = $_GET['user'];
			$pass = $_GET['pass'];

			if ($user!='user' && $pass != 'admin') {
				$counter++;
				setcookie("contador",$counter, time() + 10);
				echo "Error, has hecho intentos:" . $counter;
			}else{
				echo "Bien";
			}

		}else{
			setcookie("contador",$counter, time() + 10);
			echo "Error, has hecho intentos: " . $counter;
}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>' method="get">
	<input type="text" name="user">
	<input type="password" name="pass">
	<input type="submit" name="enviar">
</form>

</body>
</html>