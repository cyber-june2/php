<!-- Construir um programa que leia três números e mostre o maior entre eles. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior número</title>
</head>

<body>
    <h2>Maior número</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="text" name="numero1" id="numero1" required><br><br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="text" name="numero2" id="numero2" required><br><br>
        <label for="numero3">Digite o terceiro número:</label>
        <input type="text" name="numero3" id="numero3" required><br><br>
        <input type="submit" value="Calcular Maior">
    </form>
</body>

</html>

<?php
if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    if ($numero1 > $numero2 && $numero1 > $numero3) {
        echo "$numero1 é o maior número.";
    } elseif ($numero2 > $numero1 && $numero2 > $numero3) {
        echo "$numero2 é o maior número.";
    } elseif ($numero3 > $numero1 && $numero3 > $numero2) {
        echo "$numero3 é o maior número.";
    }
}
