<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Investimento</title>
</head>
<body>
    <h1>Calculadora de Investimento</h1>
    <form action="resultado.php" method="post">
        <label for="tipoInvestimento">Tipo de Investimento:</label>
        <select name="tipoInvestimento" id="tipoInvestimento">
            <option value="1">Tipo 1</option>
            <option value="2">Tipo 2</option>
        </select><br><br>
        <label for="valorInvestimento">Valor do Investimento:</label>
        <input type="number" name="valorInvestimento" id="valorInvestimento" step="0.01" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>