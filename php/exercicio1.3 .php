<?php

$custoDeFabrica <=25000; 


$porcentagemDistribuidor = 15; 
$porcentagemImpostos = 20; 


$valorDistribuidor = $custoDeFabrica * ($porcentagemDistribuidor / 100);
$valorImpostos = $custoDeFabrica * ($porcentagemImpostos / 100);


$precoFinal = $custoDeFabrica + $valorDistribuidor + $valorImpostos;


echo "O preço final ao consumidor é: R$" . number_format($precoFinal, 2, ',', '.');
?>
