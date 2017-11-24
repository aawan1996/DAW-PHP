<?php  
class pieza{
	private $color;
	private $posicion;

	//////////////////////////////////////////////////////////
	//CONSTRUCTOR
	//////////////////////////////////////////////////////////
	function __CONSTRUCT($color,$posicion){
		$this->color = $color;
		$this->posicion = $posicion;
	}
	//////////////////////////////////////////////////////////
	//SET Y GET
	//////////////////////////////////////////////////////////
	function setColor($color){
		$this->color = $color;
	}
	function setPosicion($posicion){
		$this->posicion = $posicion;
	}
	function getColor(){
		return $this->color; 
	}
	function getPosicion(){
		return $this->posicion; 
	}
	/////////////////////////////////////////////////////////
	// MÉTODOS
	/////////////////////////////////////////////////////////
	function moverPieza($posicion){
		$hi = $this->movimentsPossibles();
		// print_r($hi);
		$my = explode(",", $posicion);
		// $final = "".$my[0].",".$my[1];
		// $this->posicion = $final;
		$ok = 0;
		echo "<br>Tu movimiento actual es: ".$this->posicion."</br>";
		foreach ($hi as $key => $value) {
			$aux = "(".$posicion.")";
			if (strcmp($aux, $value)==0) {
				$ok = 1;
			}
		}

		if ($ok == 1){
			$this->posicion = $posicion;
			echo "Movimiento realizado con éxito. Tu posicion actual es: ".$this->posicion;
		}else{
			echo "Movimiento no se puede realizar";

		}


	}
}


?>