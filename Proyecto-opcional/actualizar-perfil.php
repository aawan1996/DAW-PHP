<?php  

	session_start();

	$file_handle = fopen($_SESSION['archivo'], "r");

	for ($i = 0; !feof($file_handle); $i++) {
		$line = fgets($file_handle);

		// $man = explode('-', $line);
		// echo "El length del despues explode".strlen($man[$i]);
		// $otro = trim($man[$i]);
		// echo "El length del despues trim".strlen($otro);
		$aux = array(trim($line));
		$final = array_merge_recursive($aux,$final);

	}

?>