<!-- Faça um programa que peça um número e depois o mostre -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 3</title>
</head>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Digite um número: <input type="number" name="numero">
    <input type="submit" value="Enviar">
</form>

<?php
// Verifica se o método de solicitação é POST e se o campo número foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    echo "<p>O número que você digitou é: $numero</p>";
}
?>
</body>

</html>
