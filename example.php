<?php
require_once 'complex.php';

	#Examples
	$complex = new Complex(); //instance
	$complex->set_comp_num(3,4); //define number(default 0,0)
	echo"Number: ".$complex->comp_numb."<br>";
	echo"Real: ".$complex->real."<br>";
	echo"Imaginer: ".$complex->imaginer."<br>";
	echo "Modulus: ".$complex->modulus()."<br>";
	echo "Polar Form: ".$complex->polar_form()."<br>";
	echo "Conjugate Number: ".$complex->conj_number()."<br>";
	echo "Conjugate Form: ".$complex->conj_form()."<br>";
?>
