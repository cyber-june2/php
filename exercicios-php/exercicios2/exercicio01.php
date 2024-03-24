<!-- Escreva um programa que leia dois números e exiba o módulo. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Módulo</title>
</head>

<body>
    <h2>Calculadora de Módulo</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="text" name="numero1" id="numero1" required><br><br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="text" name="numero2" id="numero2" required><br><br>
        <input type="submit" value="Calcular Módulo">
    </form>
</body>

</html>

<?php
function calcularModulo($numero1, $numero2)
{
    return abs($numero1 - $numero2);
}

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $modulo = calcularModulo($numero1, $numero2);

    echo "O módulo dos números é: $modulo.";
}
?>