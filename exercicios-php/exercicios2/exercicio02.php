<!-- Crie uma variável que leia um número; Faça um if chegando se ele é positivo ou negativo e imprima uma mensagem. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo ou Negativo?</title>
</head>

<body>
    <h2>Positivo ou Negativo?</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Digite um número:</label>
        <input type="text" name="numero" id="numero" required><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    if ($numero > 0) {
        echo "O número é positivo.";
    } elseif ($numero < 0) {
        echo "O número é negativo.";
    } else {
        echo "O número é zero.";
    }
}
?>