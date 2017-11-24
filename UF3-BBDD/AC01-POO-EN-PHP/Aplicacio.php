<?php  

include ("persona.php");
include ("Estudiant.php");
include ("Treballador.php");
// include ("M7-PHP/UF3-BBDD/AC01-POO-EN-PHP/Estudiant.php");
// include ("M7-PHP/UF3-BBDD/AC01-POO-EN-PHP/Treballador.php");

$persona1 = new persona("eugeni","bejan","bejan",20);
$student = new Estudiant("daw-1","DAW",6.9);
$worker = new treballador(200,"Compra-venta","Eugeni","bejan","bejan",20);

echo $persona1->toString()."<br>";
echo $student->toString()."<br>";
echo $worker->toString()."<br>";
?>