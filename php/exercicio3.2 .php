<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Investimento</title>
</head>
<body>
    <h1>Resultado do Investimento</h1>
    <?php

    if (isset($_POST['tipoInvestimento']) && isset($_POST['valorInvestimento'])) {
        // Obtém os dados do formulário
        $tipoInvestimento = $_POST['tipoInvestimento'];
        $valorInvestimento = $_POST['valorInvestimento'];

        $correcaoTipo1 = 0.03; 
        $correcaoTipo2 = 0.04;  

        $valorCorrigido = 0;

        switch ($tipoInvestimento) {
            case 1:
                $valorCorrigido = $valorInvestimento + ($valorInvestimento * $correcaoTipo1);
                break;
            case 2:
                $valorCorrigido = $valorInvestimento + ($valorInvestimento * $correcaoTipo2);
                break;
            default:
                echo "Tipo de investimento inválido.";
                break;
        }

     
        if ($valorCorrigido > 0) {
            echo "O valor corrigido do investimento é: R$" . number_format($valorCorrigido, 2, ',', '.');
        }
    } else {
        echo "Por favor, preencha o formulário.";
    }
    ?>
    <br><br>
    <a href="form.php">Voltar ao formulário</a>
</body>
</html>