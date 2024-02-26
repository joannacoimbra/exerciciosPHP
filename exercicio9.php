<!-- Faça um script que peça dois números inteiros e um número real e calcule:
1. o produto do dobro do primeiro com metade do segundo
2. a soma do triplo do primeiro com o terceiro
3. o terceiro elevado ao cubo  -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 9</title>
</head>

<body>
<h2>Informe dois numeros inteiros e um real</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Primeiro número inteiro: <input type="number" name="num1" required><br>
    Segundo número inteiro: <input type="number" name="num2" required><br>
    Número real: <input type="number" name="num3" step="0.01" required><br>
    <input type="submit" value="Calcular">
</form>

<?php
// Verifica se o método de solicitação é POST e se os campos dos números foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
    // Obtém os números fornecidos pelo usuário
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // Calcula as operações especificadas
    $resultado1 = ($num1 * 2) * ($num2 / 2);
    $resultado2 = ($num1 * 3) + $num3;
    $resultado3 = pow($num3, 3);

    // Exibe os resultados
    echo "<p>1. O produto do dobro do primeiro com metade do segundo é: $resultado1</p>";
    echo "<p>2. A soma do triplo do primeiro com o terceiro é: $resultado2</p>";
    echo "<p>3. O terceiro elevado ao cubo é: $resultado3</p>";
}
?>
</body>

</html>
