<?php

$custoDeFabrica >= 12000; 


$porcentagemDistribuidor = 5; 
$porcentagemImpostos = 0; 


$valorDistribuidor = $custoDeFabrica * ($porcentagemDistribuidor / 100);
$valorImpostos = $custoDeFabrica * ($porcentagemImpostos / 100);


$precoFinal = $custoDeFabrica + $valorDistribuidor + $valorImpostos;


echo "O preço final ao consumidor é: R$" . number_format($precoFinal, 2, ',', '.');
?>



