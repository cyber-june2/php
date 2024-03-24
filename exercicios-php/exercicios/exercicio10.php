<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Décimo programa</title>
</head>
<body>
    <?php //Trabalhando com arrays
    $dados = "Maria;737570;maria@fsa.br";
    $dados = explode(";", $dados);
    echo $dados[0];
    echo $dados[1];
    echo $dados[2];
    ?>
</body>
</html>