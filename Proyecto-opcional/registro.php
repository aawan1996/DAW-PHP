<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		input[type=text], select, input[type=password]{
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit] {
		    width: 100%;
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}

		input[type=submit]:hover {
		    background-color: #45a049;
		}
		div {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 20px;
		}
	</style>
<!-- 	<script>

		$(document).ready(function(){

		   $('#dato-usuario-enviar').click(function(event){
			   event.preventDefault();
			   if($('#name').val() == ''){
			      alert("Nombre no puede estar vacio");
			   }else{
			   }
			   if($('#direccion').val() == ''){
			      alert("Direccion no puede estar vacio");
			   }
			   if($('#tarjeta').val() == ''){
			      alert("Tarjeta no puede estar vacio");
			   }
			});

		});

	</script> -->
</head>
<body>
<?php  

	if (isset($_POST['registrar'])){
		if (!empty($_POST['Cname'] && !empty($_POST['Cpassword']))) {
			$nombre = $_POST['Cname'];
			// echo $nombre;			
			$_SESSION['nuevo-registo'] = $nombre;
			$pass = $_POST['Cpassword'];

			$existe = 0;

			$final = array();
			$file_handle = fopen("usuarios/usuarios.txt", "r");

			for ($i = 0; !feof($file_handle); $i++) {
				$line = fgets($file_handle);

				$man = explode('-', $line);
				// echo "El length del despues explode".strlen($man[$i]);
				// $otro = trim($man[$i]);
				// echo "El length del despues trim".strlen($otro);
				@$aux = array(trim($man[0])=>trim($man[1]));
				$final = array_merge_recursive($aux,$final);
			}
			foreach ($final as $key => $value) {
				if (strcmp($nombre , $key)==0) {
					$existe = 1;
					
				}
			}

			if ($existe == 1){
				header('Location: main.php?existe=1');
			}else{
				$file_handle = fopen("usuarios/usuarios.txt", "a+");
				$write = "\n".$nombre.'-'.$pass;
				fwrite($file_handle, $write);
			}
		}else{
			header('Location: main.php');
		}

	}

?>
<div>
<form action="dato-usuario.php" method="post" enctype="multipart/form-data">
	Porfavor, introduce una foto tuya:
	<input type="file" name="imagen" accept="image/*">
	<br>
	Porfavor, introduce tu nombre:
	<input type="text" name="name" id="name">

	<br>
	Porfavor, introduce la direccion:
	<input type="text" name="direccion" id="direccion">

	<br>
	Porfavor, introduce la tarjeta
	<input type="text" name="tarjeta" id="tarjeta">

	<input type="hidden" name="oculto" value="<?php echo $nombre ?>">
	<br>
	<input type="submit" name="dato-usuario-enviar" id="dato-usuario-enviar">
</form>
</div>
</body>
</html>