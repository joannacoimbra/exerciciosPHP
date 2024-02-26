<!-- Faça um script que calcule a área de um quadrado em seguida mostre o dobro da área para o usuário -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 6</title>
</head>

<body>
<h2>Calcule a área do quadrado</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Lado do quadrado: <input type="number" name="lado"><br>
    <input type="submit" value="Calcular">
</form>

<?php
// Verifica se o método de solicitação é POST e se o campo do lado do quadrado foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['lado'])) {
    // Obtém o valor do lado do quadrado fornecido pelo usuário
    $lado = $_POST['lado'];

    // Calcula a área do quadrado
    $area = $lado * $lado;

    // Calcula o dobro da área
    $dobro_da_area = $area * 2;

    // Exibe o dobro da área
    echo "<h2>O dobro da área do quadrado é: $dobro_da_area</h2>";
}
?>

</html>
