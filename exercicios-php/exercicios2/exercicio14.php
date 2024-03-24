<!-- Criar um programa que leia o nome e o salário de um funcionário e calcule o desconto previdenciário com a seguinte regra: o desconto é de 11% do valor do salário, entretanto, o valor máximo de desconto é de 899,48, imprimir o nome, o salário e o valor do desconto previdenciário. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto Previdenciário</title>
</head>

<body>
    <h2>Calculadora de Desconto Previdenciário</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nome">Nome do Funcionário:</label>
        <input type="text" name="nome" id="nome" required><br><br>
        <label for="salario">Salário (R$):</label>
        <input type="text" name="salario" id="salario" required><br><br>
        <input type="submit" value="Calcular Desconto">
    </form>
</body>

</html>

<?php
if (isset($_POST['nome']) && isset($_POST['salario'])) {
    $nome = $_POST['nome'];
    $salario = $_POST['salario'];

    $desconto_previdenciario = $salario * 0.11;

    if ($desconto_previdenciario > 899.48) {
        $desconto_previdenciario = 899.48;
    }

    echo "Nome: $nome\n";
    echo "Salário: R$ " . number_format($salario, 2, ',', '.') . '<br>';
    echo "Desconto Previdenciário: R$ " . number_format($desconto_previdenciario, 2, ',', '.');
}
?>