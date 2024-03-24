<!-- Construir um programa que leia o nome de um livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo, considerando que o professor tem 10 dias para devolver o livro e o aluno somente 3 dias. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo de Livro</title>
</head>

<body>
    <h2>Empréstimo de Livro</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="livro">Nome do Livro:</label>
        <input type="text" name="livro" id="livro" required><br><br>
        <label for="tipo_usuario">Tipo de Usuário:</label>
        <select name="tipo_usuario" id="tipo_usuario" required>
            <option value="professor">Professor</option>
            <option value="aluno">Aluno</option>
        </select><br><br>
        <input type="submit" value="Confirmar Empréstimo">
    </form>
</body>

</html>

<?php
if (isset($_POST['livro']) && isset($_POST['tipo_usuario'])) {
    $livro = $_POST['livro'];
    $tipo_usuario = $_POST['tipo_usuario'];

    if ($tipo_usuario == 'professor') {
        $prazo_devolucao = '10 dias';
    } elseif ($tipo_usuario == 'aluno') {
        $prazo_devolucao = '3 dias';
    } else {
        echo "Tipo de usuário inválido.";
        exit;
    }

    echo "Recibo:<br>";
    echo "Livro emprestado: $livro<br>";
    echo "Tipo de usuário: $tipo_usuario<br>";
    echo "Prazo de devolução: $prazo_devolucao<br>";
}
?>