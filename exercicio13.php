<!-- Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros, que custam R$ 25,00.
Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações:
comprar apenas latas de 18 litros;
comprar apenas galões de 3,6 litros;
misturar latas e galões, de forma que o desperdício de tinta seja menor. Acrescente 10% de folga e sempre arredonde os valores para cima, isto é, considere latas cheias.  -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 13</title>
</head>

<body>
<h2>Informe o tamanho da área a ser pintada (em metros quadrados):</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Área a ser pintada: <input type="number" name="area" step="0.01" required><br>
    <input type="submit" value="Calcular">
</form>

<?php
// Verifica se o método de solicitação é POST e se o campo da área foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['area'])) {
    // Obtém a área a ser pintada fornecida pelo usuário
    $area = $_POST['area'];

    // Calcula a quantidade de tinta necessária com 10% de folga
    $quantidade_tinta = $area / 6 * 1.1;

    // Calcula a quantidade de latas de 18 litros e de galões de 3,6 litros necessários
    $latas_18_litros = ceil($quantidade_tinta / 18);
    $galoes_3_6_litros = ceil($quantidade_tinta / 3.6);

    // Calcula o preço total para cada opção
    $preco_latas_18_litros = $latas_18_litros * 80;
    $preco_galoes_3_6_litros = $galoes_3_6_litros * 25;

    // Misturando latas e galões
    $quantidade_latas_misturadas = floor($quantidade_tinta / 18);
    $resto_tinta = $quantidade_tinta % 18;
    $quantidade_galoes_misturados = ceil($resto_tinta / 3.6);

    // Calcula o preço total para a mistura
    $preco_mistura = ($quantidade_latas_misturadas * 80) + ($quantidade_galoes_misturados * 25);

    // Exibe os resultados
    echo "<h3>Comprar apenas latas de 18 litros:</h3>";
    echo "<p>Quantidade de latas: $latas_18_litros</p>";
    echo "<p>Preço total: R$ $preco_latas_18_litros</p>";

    echo "<h3>Comprar apenas galões de 3,6 litros:</h3>";
    echo "<p>Quantidade de galões: $galoes_3_6_litros</p>";
    echo "<p>Preço total: R$ $preco_galoes_3_6_litros</p>";

    echo "<h3>Misturar latas e galões:</h3>";
    echo "<p>Quantidade de latas: $quantidade_latas_misturadas</p>";
    echo "<p>Quantidade de galões: $quantidade_galoes_misturados</p>";
    echo "<p>Preço total: R$ $preco_mistura</p>";
}
?>

</body>

</html>
