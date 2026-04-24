<?php
$peso = 50;
$altura = 1.72;
$imc = $peso/($altura**2);

if ($imc < 18.5){
	echo "Abaixo do Peso";
}
if ($imc >= 18.5 && $imc <= 24.9){
	echo "Peso Ideal";
}
if ($imc >= 25){
	echo "Acima do Peso";
}

?>