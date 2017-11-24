
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
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
    <form class="login-form" action="validation.php" method="post">
      <input type="text" placeholder="Username" name="user"/>
      <input type="password" placeholder="Password" name="password"/>
<?php 
if (isset($_GET['ok'])) {
	echo "
		<p style='color:green'>Consulta realizada correctamente</p>
	";
	// echo "<br>";
}
 ?>
<?php if (isset($_GET['error'])) {
	if ($_GET['error']==1) {
		# code...
	echo "<p style='color:red'>Usuario no administrador</p>";
	}
} ?>
<br>
      <button type="submit" name="enviar">login</button>
    </form>
  </div>
</div>
</body>
</html>