<!-- João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar o rendimento diário de seu trabalho. Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo excedente. João precisa que você faça um programa que leia a variável peso (peso de peixes) e calcule o excesso. Gravar na variável excesso a quantidade de quilos além do limite e na variável multa o valor da multa que João deverá pagar. Imprima os dados do programa com as mensagens adequadas.  -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 11</title>
</head>

<body>
<h2>Informe o peso de peixes (em quilos):</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Peso de peixes: <input type="number" name="peso" step="0.01" required><br>
    <input type="submit" value="Calcular Multa">
</form>

<?php
// Verifica se o método de solicitação é POST e se o campo do peso foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['peso'])) {
    // Obtém o peso de peixes fornecido pelo usuário
    $peso = $_POST['peso'];

    // Define o peso máximo permitido
    $peso_maximo = 50;

    // Calcula o excesso de peso, se houver
    $excesso = max(0, $peso - $peso_maximo);

    // Calcula o valor da multa, se houver excesso de peso
    $multa = $excesso * 4;

    // Verifica se houve excesso de peso e calcula a multa correspondente
    if ($excesso > 0) {
        echo "<p>O peso de peixes excedeu o limite permitido em $excesso quilos.</p>";
        echo "<p>O valor da multa a ser paga por João é de R$ $multa.</p>";
    } else {
        echo "<p>O peso de peixes está dentro do limite permitido, João não precisa pagar multa.</p>";
    }
}
?>

</body>

</html>
