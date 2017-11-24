<?php  
include "conexion.php";
if (isset($_GET['cambiar'])) {
	$CodArt = $_GET['CodArt'];
	$Articulo = $_GET['Articulo'];
	$PVP = $_GET['PVP'];
	$CodFami = $_GET['CodFami'];
	$art = $_GET['art'];
	echo $art;


	$consulta = 'UPDATE tarticulos SET  Articulo="'.$Articulo.'" ,  PVP='.$PVP.',CodArt='.$CodArt.' WHERE CodFami='.$CodFami.' AND Articulo="'.$art.'"   ';
	$conexion->query($consulta);
	echo $consulta;
	if ($conexion->query($consulta) === TRUE) {
		// echo "bien";
		header('Location: listado.php?ok=1');
	} else {
		// echo "mal";
		header('Location: editar.php?ok=0');
	}
}
if (isset($_GET['cancelar'])){

	header('Location: listado.php?ok=2');
}

?>