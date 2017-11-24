<?php  

class Estudiant extends persona {
	private $grup;
	private $cicle;
	private $notaAcces;

	//////////////////////////////////////////////////////////
	//CONSTRUCTOR
	//////////////////////////////////////////////////////////
	function Estudiant($grup,$cicle,$notaAcces){
		$this->grup = $grup;
		$this->cicle = $cicle;
		$this->notaAcces = $notaAcces;
	}
	//////////////////////////////////////////////////////////
	//SET Y GET
	//////////////////////////////////////////////////////////
	function setNombrePersona(){

	}
	function setGrup($grup){
		$this->grup = $grup;
	}
	function setcicle($cicle){
		$this->cicle = $cicle;
	}
	function setnotaAcces($notaAcces){
		$this->notaAcces = $notaAcces;
	}
	function getgrup(){
		return $this->grup; 
	}
	function getcicle(){
		return $this->cicle; 
	}
	function getnotaAcces(){
		return $this->notaAcces; 
	}
	//Tostring
	function toString(){
		return "Mi grupo es " . $this->grup . ", mi ciclo es ". $this->cicle . "y mi nota de acceso es " . $this->notaAcces;
	}

	function igual($clase1){
		if ($clase1->getNom() == $this->getNom() &&
			$clase1->getprimerCognom() == $this->getprimerCognom() && $clase1->getsegonCognom() == $this->getsegonCognom() && $clase1->getedat() == $this->getedat()
		){
			return true;
		}else{
			return false;
		}
	}



}


?>