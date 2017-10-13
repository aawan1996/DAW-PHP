<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:200');
		input{
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    border: none;
		    background-color: #5ceaae;
		    color: white;
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
			margin-top: 40px;
		    border-radius: 5px;
		    background-color: #139a61;
		    padding: 20px;
		}
		label {
			color:white;
		}

		table {

			border-radius: 5px;
		    border-collapse: collapse;
		    width: 40%;
		}

		th, td {
			border-radius: 5px;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){background-color: #2de7e2}

		th {
		    background-color: #129c98	;
		    color: white;
		}
		h2{
			font-family: 'Encode Sans Expanded', sans-serif;
		}
		p{
			color:red;
		}
	</style>
	<?php 

		//Creo la funcion para saber si existe el nombre en la agenda o no
		function existe($array,$a_comprobar){
			// $existe = array_search($a_comprobar, $array);
			foreach ($array as $key => $value) {
				if (strcmp($key, $a_comprobar)==0) {
					$existe = 1;
					return $existe;
				}
			}
		}
		if (isset($_POST['enviar'])) {
			if (isset($_COOKIE['book'])){
				if (empty($_POST['nombre'])) {
					echo '<p class="nombre-vacio">El nombre no puede estar vacioooooooo!</p>';
				}else{
					$nombre = $_POST['nombre']; 
					$telefono = $_POST['telefono'];
					$book2 = unserialize($_COOKIE['book']);
					// $existe_nombre=existe($book2,$nombre);
					//Con el función pruebo si el nombre exixte o no. Si exixte me devuelve 1, y si no no me deveulve nada.
					$existe = existe($book2,$nombre);
					if ($existe == 1 && empty($_POST['telefono'])) {
						unset($book2[$nombre]);
					}
					//Si me devuelve algo diferente a 1... Cosa que no me devolverá 1
					if ($existe != 1 && !empty($telefono)) {
						//Si el usuario no existem y el teléfono no está vacio, entonces creo un nuevo array en el que guardo los datos y lo uno con el book2. EL array que coje el array del cookie
						$nuevo_usuario = array(strtolower($nombre) => $telefono);
						$book2 = array_merge($book2,$nuevo_usuario);
					}
					if ($existe == 1 && !empty($telefono)){
						$book2[$nombre] = $telefono;
					}
					//Voy seteando la cookie cada vez que se da el boton guardar, ya que de esta forma en el book2 se guarda lo nuevo, y lo envío al cookie actualizado.
					setcookie('book',serialize($book2));
				}
				
			}else{
				if (!empty($_POST['nombre'])) {
					// $nombre = $_POST['nombre']; 
					// $telefono = $_POST['telefono'];
					$book2 = array(strtolower($_POST['nombre']) => $_POST['telefono']);
					// foreach ($book2 as $key => $value) {
					// 	echo $key . ' : ' . $value;
					// }
					//seteando la cookie la primera vez con el nombre del usuario, aun que no ponga el teléfono.
					setcookie('book',serialize($book2));
				}else{
					echo '<p class="nombre-vacio">El nombre no puede estar vacio!</p>';
				}
			}
		}
	?>
</head>
<body>
<table>
	<h2>Contactos</h2>
<?php 
	echo '<tr>';
	echo '<th>Nombre</th>';
	echo '<th>Teléfono</th>';
	echo '</tr>';
	if (isset($book2)) {
		foreach ($book2 as $key => $value) {
			echo '<tr>';
			echo '<td>'.$key.'</td>';
			echo '<td>'.$value.'</td>';
			echo '</tr>';
		}
	}
 ?>
</table>

<div>
  <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <label for="fname">Nombre</label>
    <input type="text" id="fname" name="nombre" placeholder="Tu nombre...">

    <label for="lname">Teléfono</label>
    <input type="number" id="lname" name="telefono" placeholder="Tu teléfono...">

  
	<input type="submit" name="enviar" value="Guardar">
    
  </form>
</div>

</body>
</html>