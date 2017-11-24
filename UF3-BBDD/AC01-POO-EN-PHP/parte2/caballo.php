<?php  
class caballo extends pieza{
	///////////////////////////////
	// CONSTRUCTOR
	///////////////////////////////
	function __CONSTRUCT($color,$posicion){
		parent::setColor($color);
		parent::setPosicion($posicion);
	}
	///////////////////////////////
	// MÉTODOS
	///////////////////////////////
	function movimentsPossibles(){
		// echo "**************** MOVIMENTS POSSIBLES ******************".'<br>';
		// $my = explode(",", $posicionAMover);
		$my2 = explode(",", parent::getPosicion());
		// $columnaPeon = $my[0];
		// $filaPeon = $my[1];
		$columnaActual = $my2[0];
		$filaActual = $my2[1];
		$posiblesMovimientos = array();

		if ($columnaActual == 0 && $filaActual <= 5) {
			array_push($posiblesMovimientos, '('.($columnaActual+1).",".($filaActual+2).')');
			array_push($posiblesMovimientos, '('.($columnaActual+2).",".($filaActual+1).')');
		}
		if ($columnaActual >= 2 &&  $columnaActual<=5 && $filaActual<=5 && $filaActual>=2){
			array_push($posiblesMovimientos, '('.($columnaActual-2).",".($filaActual+1).')');
			array_push($posiblesMovimientos, '('.($columnaActual-2).",".($filaActual-1).')');
			array_push($posiblesMovimientos, '('.($columnaActual-1).",".($filaActual-2).')');
			array_push($posiblesMovimientos, '('.($columnaActual+1).",".($filaActual-2).')');
			array_push($posiblesMovimientos, '('.($columnaActual+1).",".($filaActual+2).')');
			array_push($posiblesMovimientos, '('.($columnaActual-1).",".($filaActual+2).')');
			array_push($posiblesMovimientos, '('.($columnaActual+2).",".($filaActual+1).')');
			array_push($posiblesMovimientos, '('.($columnaActual+2).",".($filaActual-1).')');
		}
		if ($filaActual == 6 && $columnaActual==0) {
			array_push($posiblesMovimientos, '('.($columnaActual+1).",".($filaActual-2).')');
			array_push($posiblesMovimientos, '('.($columnaActual+2).",".($filaActual-1).')');
			array_push($posiblesMovimientos, '('.($columnaActual+2).",".($filaActual+1).')');
		}
		if ($filaActual==6 && $columnaActual>=2 && $columnaActual<=5) {
			array_push($posiblesMovimientos, '('.($columnaActual-2).",".($filaActual+1).')');
			array_push($posiblesMovimientos, '('.($columnaActual-2).",".($filaActual-1).')');
			array_push($posiblesMovimientos, '('.($columnaActual-1).",".($filaActual+2).')');
			array_push($posiblesMovimientos, '('.($columnaActual+1).",".($filaActual+2).')');
			array_push($posiblesMovimientos, '('.($columnaActual+1).",".($filaActual-2).')');
			array_push($posiblesMovimientos, '('.($columnaActual-1).",".($filaActual-2).')');
			# code...
		}
		if ($filaActual==7 && $columnaActual==7){
			array_push($posiblesMovimientos, '('.($columnaActual-2).",".($filaActual-1).')');
			array_push($posiblesMovimientos, '('.($columnaActual-1).",".($filaActual-2).')');
		}
		if($columnaActual == 0 && $filaActual == 7){
			array_push($posiblesMovimientos, '('.($columnaActual+2).",".($filaActual-1).')');
			array_push($posiblesMovimientos, '('.($columnaActual-2).",".($filaActual+1).')');
		}
		return $posiblesMovimientos;

	}
}

?>