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
}elseif (isset($_POST['generarPdf'])){
	require('../../../../fpdf/fpdf.php');  			//Añadimos librería
	$conexion = new mysqli('localhost','root','','ac02') or die ("bye");
	$consulta = "SELECT * FROM userpass";
	$resultado = $conexion->query($consulta);
	$aux = array();

	class uf extends FPDF{
	    //Cabecera
	    function tabla ($header){
			    foreach($header as $col){
				    $this->SetFillColor(100,100,100);
				    $this->Cell(90,20,$col,1,0,'C',true);
		    }
		    $this->Ln();
		}
	    function data ($data){
			$numPagina = $this->PageNo();
	
	    	foreach ($data as $key => $value) {
				$this->SetTextColor(0,0,0);
			    $this->Cell(90,7,$value,1);
	    	}
		    $this->Ln();
	    }

		function Footer()
	    {
	        // Go to 1.5 cm from bottom
	        $this->SetY(-15);
	        // Select Arial italic 8
	        $this->SetFont('Arial','I',10);
	        // Print centered page number
	        $this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
	    }

	}

//Creación del objeto de la clase heredada
$pdf = new uf();
$pdf->SetFont('Arial','',14);
//Títulos de las columnas
$header=array('User','Password','Tipo');
$pdf->AliasNbPages();
//Primera página
$pdf->AddPage('L');
$pdf->SetAuthor('Administrador');
//$pdf->AddPage();
$pdf->tabla($header);
	while ($data = $resultado->fetch_assoc()) {
		$pdf->data($data);
	}
$pdf->Footer();

$pdf->Output();



}else{
	header('Location: exercici2.php');
}

?>

