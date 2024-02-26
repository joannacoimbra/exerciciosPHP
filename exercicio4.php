<!-- Faça um script que peça dois números e imprima a soma -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 4</title>
</head>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Digite o primeiro número: <input type="number" name="numero1"><br>
    Digite o segundo número: <input type="number" name="numero2"><br>
    <input type="submit" value="Calcular Soma">
</form>

<?php
// Verifica se o método de solicitação é POST e se os campos de número 1 e número 2 foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero1']) && isset($_POST['numero2'])) {
    // Obtém os números fornecidos pelo usuário
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    // Calcula a soma dos números
    $soma = $numero1 + $numero2;

    // Exibe a soma
    echo "<p>A soma de $numero1 e $numero2 é igual a: $soma</p>";
}
?>
</body>

</html>
