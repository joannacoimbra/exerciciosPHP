<!-- Faça um script que peça 3 notas de alunos e mostre a média -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 5</title>
</head>

<body>
<h2>Informe as notas do aluno:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nota 1: <input type="number" name="nota1" min="0" max="10" step="0.1"><br>
    Nota 2: <input type="number" name="nota2" min="0" max="10" step="0.1"><br>
    Nota 3: <input type="number" name="nota3" min="0" max="10" step="0.1"><br>
    <input type="submit" value="Calcular Média">
</form>

<?php
// Verifica se o método de solicitação é POST e se os campos das três notas foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
    // Obtém as notas fornecidas pelo usuário
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    // Calcula a média das notas
    $media = ($nota1 + $nota2 + $nota3) / 3;

    // Exibe a média
    echo "<h2>A média das notas é: $media</h2>";
}
?>
</body>

</html>
