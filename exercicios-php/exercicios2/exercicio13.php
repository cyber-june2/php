<!--Calcular a quantidade de dinheiro gasta por um fumante. Dados: o número de anos que ele fuma, o n° de cigarros fumados por dia e o preço de uma carteira de cigarros.-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Gastos com Cigarros</title>
</head>

<body>
    <h2>Calculadora de Gastos com Cigarros</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="anos">Número de anos que fuma:</label>
        <input type="text" name="anos" id="anos" required><br><br>
        <label for="cigarros_por_dia">Número de cigarros fumados por dia:</label>
        <input type="text" name="cigarros_por_dia" id="cigarros_por_dia" required><br><br>
        <label for="preco_carteira">Preço de uma carteira de cigarros (R$):</label>
        <input type="text" name="preco_carteira" id="preco_carteira" required><br><br>
        <input type="submit" value="Calcular Gastos">
    </form>
</body>

</html>

<?php
if (isset($_POST['anos']) && isset($_POST['cigarros_por_dia']) && isset($_POST['preco_carteira'])) {
    $anos = $_POST['anos'];
    $cigarros_por_dia = $_POST['cigarros_por_dia'];
    $preco_carteira = $_POST['preco_carteira'];

    $total_cigarros = $anos * 365 * $cigarros_por_dia;

    $total_gasto = ($total_cigarros / 20) * $preco_carteira;

    echo "Ao longo de $anos anos, você terá fumado aproximadamente $total_cigarros cigarros.\n";
    echo "Você terá gastado aproximadamente R$ " . number_format($total_gasto, 2, ',', '.') . " em cigarros.";
}
?>