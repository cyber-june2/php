<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Décimo Oitavo programa</title>
</head>
<body>
    <?php
    $aluno = "Varuzza";
    $nota1 = 6;
    $nota2 = 2;

    if(($nota1 + $nota2)/2 > 5){
        echo "O aluno $aluno está APROVADO!";
    } elseif((($nota1 + $nota2)/2 <=5) && (($nota1 + $nota2)/2 >= 3)) {
        echo "O aluno $aluno está de EXAME!";
    } else {
        echo "O aluno $aluno está de REPROVADO!";
    }
    ?>
</body>
</html>