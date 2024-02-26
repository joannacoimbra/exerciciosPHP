<!-- Faça um script que peça a temperatura em graus farenheit transforme e mostre a temperatura em graus celcius. C=5*(F-2)/9 -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 8</title>
</head>

<body>
<h2>Informe a temperatura em Farenheit</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Temperatura em Fahrenheit: <input type="number" name="fahrenheit"><br>
    <input type="submit" value="Converter">
</form>

<?php
// Verifica se o método de solicitação é POST e se o campo da temperatura em Fahrenheit foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fahrenheit'])) {
    // Obtém a temperatura em Fahrenheit fornecida pelo usuário
    $fahrenheit = $_POST['fahrenheit'];

    // Converte a temperatura de Fahrenheit para Celsius usando a fórmula C=5*(F-32)/9
    $celsius = 5 * ($fahrenheit - 32) / 9;

    // Exibe a temperatura em Celsius
    echo "<h2>A temperatura em Celsius é: $celsius °C</h2>";
}
?>
</body>

</html>
