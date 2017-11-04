<?php
	//Borramos la sesión
	session_start();
	
	session_unset();
	session_destroy();	
	header("Location:main.php");

?>