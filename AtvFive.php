<?php
$anoNascimento = 2000;
$anoHoje = 2026;
$idade = $anoHoje - $anoNascimento;

if($idade >= 18 && $idade <= 70){
	print "Você é de maior. Seu voto é obrigatório."
}
elseif ($idade > 70){
	print "Não é mais obrigado à votar."
}
else {
	print "Você é de menor, não é obrigado à votar."
}

?>