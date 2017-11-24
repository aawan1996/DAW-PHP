<?php  

class treballador extends persona{
	private $salari;
	private $categoria;


	//////////////////////////////////////////////////////////
	//CONSTRUCTOR
	//////////////////////////////////////////////////////////
	function treballador($salari, $categoria){
		// parent::setNom($nom);
		// parent::setprimerCognom($primerCognom);
		// parent::setsegonCognom($segonCognom);
		// parent::setedat($edat);
		$this->salari = $salari;
		$this->categoria = $categoria;
	}
	//////////////////////////////////////////////////////////
	//SET Y GET
	//////////////////////////////////////////////////////////
	function setsalari($salari){
		$this->salari = $salari;
	}
	function setcategoria($categoria){
		$this->categoria = $categoria;
	}
	function getsalari(){
		return $this->salari; 
	}
	function getcategoria(){
		return $this->categoria; 
	}

	function toString(){
		return "Mi salario es " . $this->salari . " y mi categoria es: ".$this->categoria;
	}
}




?>