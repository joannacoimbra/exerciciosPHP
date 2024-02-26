<!-- Faça um script que pergunte qunato você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salario referido no mês -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 7</title>
</head>

<body>
<h2>Calcule a seu salário</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Salário por hora: <input type="number" name="salario_por_hora" step="0.01"><br>
    Horas trabalhadas no mês: <input type="number" name="horas_trabalhadas_mes"><br>
    <input type="submit" value="Calcular Salário">
</form>

<?php
// Verifica se o método de solicitação é POST e se os campos do salário por hora e horas trabalhadas no mês foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['salario_por_hora']) && isset($_POST['horas_trabalhadas_mes'])) {
    // Obtém o salário por hora e o número de horas trabalhadas no mês fornecidos pelo usuário
    $salario_por_hora = $_POST['salario_por_hora'];
    $horas_trabalhadas_mes = $_POST['horas_trabalhadas_mes'];

    // Calcula o total do salário referente ao mês
    $salario_mensal = $salario_por_hora * $horas_trabalhadas_mes;

    // Exibe o total do salário referente ao mês
    echo "<h2>O total do seu salário no mês é: $salario_mensal</h2>";
}
?>

</html>
