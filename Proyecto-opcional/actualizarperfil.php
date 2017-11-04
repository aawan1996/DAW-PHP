<?php  

	session_start();

if (isset($_POST['guardar'])) {
	# code...

	$nombre = $_POST['nombre']."\n";
	$direccion = $_POST['direccion']."\n";
	$cardNumber = $_POST['cardNumber'];
	// echo $_SESSION['archivo-perfil'];

	$file_handle = fopen($_SESSION['archivo-perfil'], "w");

	fwrite($file_handle, $nombre);
	fwrite($file_handle, $direccion);
	fwrite($file_handle, $cardNumber);

	header('Location: validado.php');
}
if (isset($_POST['salir'])) {
	header('Location: salir.php');
}
if (!isset($_POST['guardar']) && !isset($_POST['salir'])){

		header('Location: main.php');

}
?>