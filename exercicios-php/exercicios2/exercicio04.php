<!-- Construir um programa que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentado somando-se ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindose 5. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>

<body>
    <h2>Exercicio 04</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="text" name="numero1" id="numero1" required><br><br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="text" name="numero2" id="numero2" required><br><br>
        <input type="submit" value="Calcular Soma">
    </form>
</body>

</html>

<?php
function calcularSoma($numero1, $numero2)
{
    return ($numero1 + $numero2);
}

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $soma = calcularSoma($numero1, $numero2);

    if ($soma > 20) {
        $soma = $soma + 8;
    } elseif ($soma <= 20) {
        $soma = $soma - 5;
    }

    echo "A soma vale: $soma.";
}
?>