<!-- Construir um programa que leia um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisível por</title>
</head>

<body>
    <h2>Divisível por?</h2>
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

    if ($numero % 10 == 0) {
        echo "$numero é divisível por 10. <br>";
    }
    if ($numero % 5 == 0) {
        echo "$numero é divisível por 5. <br>";
    }
    if ($numero % 2 == 0) {
        echo "$numero é divisível por 2. <br>";
    } elseif ($numero % 10 != 0 && $numero % 5 != 0 && $numero % 2 != 0) {
        echo "$numero não é divisível por 10, 5 ou 2.";
    }
}
