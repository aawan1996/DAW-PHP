
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
		.form select{
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
		p{
			color: red;
		}
	</style>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
      <input type="text" placeholder="Primer operando" name="primero"/>
      <input type="text" placeholder="Segundo operando" name="segundo"/>
      <select name="operacion">
      	<option value="1">Dividir</option>
      	<option value="2">Suma</option>
      	<option value="3">Concatenar</option>
      	<option value="4">Restar</option>
      </select>
<?php  
if (isset($_GET['enviar'])) {
	
	try {
		if (!(isset($_GET['primero']) || isset($_GET['segundo'])) ) {
			$result = "ERROR";
			throw new Exception("Campo vacío");
		}
	} catch (Exception $e) {
		echo "<p>".$e->getMessage()."</p>";
	}
	

	if ($_GET['operacion'] == 1) {
		try {
			if (isset($_GET['segundo'])) {
				if ($_GET['segundo']==0) {
					$result = "ERROR";
					throw new Exception("Error división por cero");
				}else{
					$result = $_GET['primero'] / $_GET['segundo'];
				}
			}
		} catch (Exception $e) {
			echo "<p>".$e->getMessage()."</p>";
		}
	}


	if ($_GET['operacion'] == 2) {
		try {
			if (is_numeric($_GET['primero']) && is_numeric($_GET['segundo'])) {
				$result = $_GET['primero'] + $_GET['segundo'];
				# code...
			}else{
				$result = "ERROR";
				throw new Exception("Algo es no-número");
			}
		} catch (Exception $e) {
			echo "<p>".$e->getMessage()."</p>";
		}
	}


	if ($_GET['operacion'] == 3){
		try{
			if (is_numeric($_GET['primero']) && is_numeric($_GET['segundo'])) {
				$result = "ERROR";
				throw new Exception("Algun campo no es string...");
			}else{
				$result=$_GET['primero'].$_GET['segundo'];
			}
		} catch (Exception $e){
			echo "<p>".$e->getMessage()."</p>";
		}
		
	}
		
	if ($_GET['operacion'] == 4) {
		try {
			if (is_numeric($_GET['primero']) && is_numeric($_GET['segundo'])) {
				$result = $_GET['primero'] - $_GET['segundo'];
			}else{
				throw new Exception("Algo es no-número");
			}
		} catch (Exception $e) {
			$result = "ERROR";
			echo "<p>".$e->getMessage()."</p>";
		}
	}

}

?>
      <input type="text" value="<?php if(isset($result)){echo $result;} ?>" id="resultado"/>
      <button type="submit" name="enviar">Calcular</button>
    </form>
  </div>
</div>
</body>
</html>
	