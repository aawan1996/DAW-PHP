<?php  
if (isset($_POST['send'])) {
	if (isset($_FILES['csv']) && $_FILES['csv']['size']>0) {
		$conexion = new mysqli('localhost','root','','ac02') or die ("bye");

		$fo = fopen($_FILES['csv']['tmp_name'], 'r');

		while(! feof($fo)){
			$csv = fgetcsv($fo,0,",");
			$query = "INSERT INTO userpass VALUES('$csv[0]','$csv[1]','$csv[2]')";
			$conexion->query($query);
		}
		$conexion->close();
		header('Location: exercici2.php?ok=1');
	}else{
		echo "No has seleccionado ningun archivo";
	}
}else{
	header('Location: exercici2.php');
}

?>

