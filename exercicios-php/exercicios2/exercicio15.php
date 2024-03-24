<!-- Criar um programa que imprima a tabuada de um número qualquer fornecido por uma variável. O resultado deve ser exibido numa tabela HTML seguindo o formato abaixo: -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid black;
            height: 30px;
            width: 100px;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Digite um número:</label>
        <input type="text" name="numero" id="numero" required><br><br>
        <input type="submit" value="Tabuada">
    </form>
</body>

</html>

<?php
if (isset($_POST['numero'])) {
    $num = $_POST['numero'];
    $resultado = 0;

    echo '<table border = 1>';
    echo '<tr>';
    echo '<th> Expressão </th>';
    echo '<th> Resultado </th>';

    for ($i = 0; $i <= 10; $i++) {
        echo '<tr>';
        echo "<th> $num x $i </th>";
        $resultado = $num * $i;
        echo "<th> $resultado </th>";
        echo '</tr>';
    }

    echo '</tr>';
    echo '</table>';
}
