<!-- Escreva um programa que leia a idade e a altura. Se a pessoa tiver menos de 12 anos ou a altura mínima não atingir 120 centímetros, imprimir o nome e a mensagem: NÃO ACEITA Caso contrário, imprimir nome e a mensagem: ACEITA. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aceitação</title>
</head>

<body>
    <h2>Verificar Aceitação</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>
        <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade" required><br><br>
        <label for="altura">Altura (cm):</label>
        <input type="text" name="altura" id="altura" required><br><br>
        <input type="submit" value="Verificar Aceitação">
    </form>
</body>

</html>

<?php
if (isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['altura'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];

    if ($idade < 12 || $altura < 120) {
        echo "$nome, NÃO ACEITA.";
    } else {
        echo "$nome, ACEITA.";
    }
}
?>