<?php  
include ("pieza.php");
include ("peon.php");
include ("caballo.php");

$peon = new peon("Verde","3,0");
$caballo = new caballo("Verde","0,6");
// print_r( $caballo->movimentsPossibles());
$caballo->moverPieza("1,4");
?>