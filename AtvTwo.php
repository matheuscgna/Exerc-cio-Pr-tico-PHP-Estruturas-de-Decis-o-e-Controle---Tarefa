<?php
$n1 = 7;
$n2 = 7;
$n3 = 7;

$media = ($n1 + $n2 + $n3)/3;

if($media >= 7){
	echo "Aprovado";
}

elseif ($media >= 5 && $media <= 6.9){
	echo "Recuperação";
}
else{
	echo "Reprovado";
}
?>