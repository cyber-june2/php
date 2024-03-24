<!-- Construir um programa que leia um número e imprima se este número é ou não par. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>

<body>
    <h2>Par ou Ímpar</h2>
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

    if ($numero % 2 == 0) {
        echo "$numero é par.";
    } else
        echo "$numero é ímpar.";
}
