<?php

$tipoInvestimento = 1;
$valorInvestimento = 1000; 


$taxaTipo1 = 0.03; 
$taxaTipo2 = 0.04;  


switch ($tipoInvestimento) {
    case 1:
        $valorCorrigido = $valorInvestimento + ($valorInvestimento * $taxaTipo1);
        break;
    case 2:
        $valorCorrigido = $valorInvestimento + ($valorInvestimento * $taxaTipo2);
        break;
    default:
        echo "Tipo de investimento inválido.";
        exit() ; 
    }

echo "O valor corrigido do investimento é: R$" . number_format($valorCorrigido, 2, ',', '.');

?>