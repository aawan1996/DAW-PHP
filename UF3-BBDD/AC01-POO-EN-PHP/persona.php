<?php  

class persona {

	private $nom;
	private $primerCognom;
	private $segonCognom;
	private $edat;

	//////////////////////////////////////////////////////////
	//CONSTRUCTOR
	//////////////////////////////////////////////////////////
	function persona($nom, $primerCognom, $segonCognom, $edat){
		$this->nom = $nom;
		$this->primerCognom = $primerCognom;
		$this->segonCognom = $segonCognom;
		$this->edat = $edat;		
	}

	//////////////////////////////////////////////////////////
	//SET Y GET
	//////////////////////////////////////////////////////////
	function setNom($nom){
		$this->nom = $nom;
	}
	function setprimerCognom($primerCognom){
		$this->primerCognom = $primerCognom;
	}
	function setsegonCognom($segonCognom){
		$this->segonCognom = $segonCognom;
	}
	function setedat($edat){
		$this->edat = $edat;
	}
	function getNom(){
		return $this->nom; 
	}
	function getprimerCognom(){
		return $this->primerCognom; 
	}
	function getsegonCognom(){
		return $this->segonCognom; 
	}
	function getedat(){
		return $this->edat; 
	}

	//Tostring
	function toString(){
		return "Soy " . $this->nom . ", mi primer apellido es ". $this->primerCognom . ", mi segundo apellido es " . $this->segonCognom ." y mi edad es " . $this->edat;
	}
}





?>