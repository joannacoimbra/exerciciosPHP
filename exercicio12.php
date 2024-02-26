<!-- Faça um Programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês, sabendo-se que são descontados 11% para o Imposto de Renda, 8% para o INSS e 5% para o sindicato, faça um programa que nos dê:
salário bruto.
quanto pagou ao INSS.
quanto pagou ao sindicato.
o salário líquido.
calcule os descontos e o salário líquido, conforme a tabela abaixo:
+ Salário Bruto : R$
- IR (11%) : R$
- INSS (8%) : R$
- Sindicato ( 5%) : R$
= Salário Liquido : R$  -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 12</title>
</head>

<body>
<h2>Informe o valor que você ganha por hora e o número de horas trabalhadas no mês:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Valor por hora: <input type="number" name="valor_hora" step="0.01" required><br>
    Horas trabalhadas no mês: <input type="number" name="horas_trabalhadas" required><br>
    <input type="submit" value="Calcular Salário">
</form>

<?php
// Verifica se o método de solicitação é POST e se os campos foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valor_hora']) && isset($_POST['horas_trabalhadas'])) {
    // Obtém os valores fornecidos pelo usuário
    $valor_hora = $_POST['valor_hora'];
    $horas_trabalhadas = $_POST['horas_trabalhadas'];

    // Calcula o salário bruto
    $salario_bruto = $valor_hora * $horas_trabalhadas;

    // Calcula os descontos
    $desconto_ir = $salario_bruto * 0.11;
    $desconto_inss = $salario_bruto * 0.08;
    $desconto_sindicato = $salario_bruto * 0.05;

    // Calcula o salário líquido
    $salario_liquido = $salario_bruto - $desconto_ir - $desconto_inss - $desconto_sindicato;

    // Exibe os resultados
    echo "<p>Salário Bruto: R$ $salario_bruto</p>";
    echo "<p>Desconto IR (11%): R$ $desconto_ir</p>";
    echo "<p>Desconto INSS (8%): R$ $desconto_inss</p>";
    echo "<p>Desconto Sindicato (5%): R$ $desconto_sindicato</p>";
    echo "<p>Salário Líquido: R$ $salario_liquido</p>";
}
?>

</body>

</html>
