<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Décimo quarto programa</title>
</head>
<body>
    <?php
    $a = 'Qualquer valor';

    if(isset($a) && ! empty($a) ){
        echo '$a está configurada. <br>';
        echo '$a tem o valor: ' . $a;
    }
    ?>
</body>
</html>