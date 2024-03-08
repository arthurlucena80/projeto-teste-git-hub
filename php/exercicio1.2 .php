<?php

$custoDeFabrica <= 12000; $custoDeFabrica >=25000; 

$porcentagemDistribuidor = 10; 
$porcentagemImpostos = 15; 


$valorDistribuidor = $custoDeFabrica * ($porcentagemDistribuidor / 100);
$valorImpostos = $custoDeFabrica * ($porcentagemImpostos / 100);


$precoFinal = $custoDeFabrica + $valorDistribuidor + $valorImpostos;


echo "O preço final ao consumidor é: R$" . number_format($precoFinal, 2, ',', '.');
?>