<!-- Criar um programa que leia duas variáveis ($linhas, $colunas) e crie uma tabela html com estas informações. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Dinâmica</title>
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

    <h2>Tabela Dinâmica</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="linhas">Digite o número de linhas:</label>
        <input type="text" name="linhas" id="linhas" required><br><br>
        <label for="colunas">Digite o número de colunas:</label>
        <input type="text" name="colunas" id="colunas" required><br><br>
        <input type="submit" value="Montar tabela">
    </form>
</body>

</html>

<?php
if (isset($_POST['linhas']) && isset($_POST['colunas'])) {
    $linhas = $_POST["linhas"];
    $colunas = $_POST["colunas"];

    if (filter_var($linhas, FILTER_VALIDATE_INT) !== false && filter_var($colunas, FILTER_VALIDATE_INT) !== false) {
        echo "<table>";


        for ($x = 1; $x <= $linhas; $x++) {
            echo "<tr>";
            for ($y = 1; $y <= $colunas; $y++) {
                echo "<td></td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Insira números inteiros.";
    }
}
?>