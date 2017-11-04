<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:200');
		h2{
			font-family: 'Encode Sans Expanded', sans-serif;

		}
		html{
			text-align: center;
			background-color: #94eb92;
		}
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

		div	 {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 20px;
		}
		#tres{
			margin-top: 10px;
			display: none;
		}
		button{
			margin-top: 15px;
			background-color: #4CAF50; /* Green */
		    border: none;
		    color: white;
		    padding: 16px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    -webkit-transition-duration: 0.4s; /* Safari */
		    transition-duration: 0.4s;
		    cursor: pointer;	
		}
		button:hover {
   			background-color: #4CAF50;
    		color: white;
		}
		.error{
			background-color: red;
			color:white;
		}
		.noterror{
			background-color: lightgreen;
			color: white;
		}
		.nomostrar{
			text-align: center;
			display: none;
		}
		.mostrar{
			text-align: center;
			display: block;
		}
		#nose{
			text-align: center;
		}

	</style>
	<script>

		$(document).ready(function(){
			// $("#login").addClass("nomostrar");
		    $("#registro").click(function(){
		    	$("#tres").show();
		    	$("#uno").hide();
		    	$("#registro").hide();
		    	$("#login").show();

		    });
		    $("#login").click(function(){
		    	$("#tres").hide();
		    	$("#uno").show();
		    	$("#registro").show();
		    	$("#login").hide();
		    });


		   $('#enviar1').click(
		   	function(e){
			   	// e.preventDefault();
				   if($('#nombreUsuario').val() == ''){
				      alert("Nombre de usuario no puede estar vacio");
				   }
				   if($('#contrasenya').val() == ''){
				      alert("Pass no puede estar vacio");
				   }
				}
			);

		   $('#submit').click(function(e){
		   	// e.preventDefault();
			   if($('#Cname').val() == ''){
			      // alert("Nombre de usuario no puede estar vacio");
			      $('#Cname').focus();
			   }
			   if($('#Cpassword').val() == ''){
			      alert("Pass no puede estar vacio");
			   }
			});




		});

	</script>
</head>
<body>
<?php  
	session_start();
	if (isset($_GET['usererror'])){
		if ($_GET['usererror']==1) {
			echo '<p class="error">Ups.. verifica tus datos</p>';
			# code...
		}
	}
	if (isset($_GET['existe'])){

		
		if ($_GET['existe']==1) {
			echo '<p class="error">Este usuario ya existe...</p>';
		}
		
	}
	if (isset($_GET['creado'])){
		if ($_GET['creado']==1) {
			echo '<p class="noterror">usuario creado con exito!</p>';
		}
		
	}

?>
<h2>Inciar sesión</h2>
<div id="uno">
<form action="validar.php" method="post" id="primero">
	<input type="text" name="nombreUsuario" id="nombreUsuario" placeholder="Usuario">
	<input type="password" name="contrasenya" id="contrasenya" placeholder="Contrasenya">
	<!-- <input type="password" name="contrasenyaConfirmar"> -->
	<input type="submit" name="enviar" id="enviar1">
</form>
</div>
<div id="nose">
<button id="registro" >Registro</button>
<button id="login" class="nomostrar">Iniciar sesion</button>
</div>
<div id="tres">
	<p>Registro</p>
<form action="registro.php" method="post" id="dos">
	<input type="text" name="Cname" placeholder="Usuario" id="Cname">
	<input type="password" name="Cpassword" placeholder="Contrasenya" id="Cpassword">
	<!-- <input type="password" name="contrasenyaConfirmar"> -->
	<input type="submit" name="registrar" value="Registrar" id="submit">
</form>
</div>
</body>
</html>