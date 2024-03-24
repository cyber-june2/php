<!-- Escreva um programa que leia um número inteiro de 1 a 12 einforme o mês do ano correspondente, sendo janeiro o mês 1. Se o número não corresponder a um mês do ano, mostre a mensagem de erro. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Mês do Ano</title>
</head>

<body>
    <h2>Verificar Mês do Ano</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Digite um número de 1 a 12:</label>
        <input type="text" name="numero" id="numero" required><br><br>
        <input type="submit" value="Verificar">
    </form>
</body>

</html>

<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    if ($numero >= 1 && $numero <= 12) {
        switch ($numero) {
            case 1:
                echo "Janeiro";
                break;
            case 2:
                echo "Fevereiro";
                break;
            case 3:
                echo "Março";
                break;
            case 4:
                echo "Abril";
                break;
            case 5:
                echo "Maio";
                break;
            case 6:
                echo "Junho";
                break;
            case 7:
                echo "Julho";
                break;
            case 8:
                echo "Agosto";
                break;
            case 9:
                echo "Setembro";
                break;
            case 10:
                echo "Outubro";
                break;
            case 11:
                echo "Novembro";
                break;
            case 12:
                echo "Dezembro";
                break;
        }
    } else {
        echo "Erro: O número inserido não corresponde a um mês do ano.";
    }
}
?>