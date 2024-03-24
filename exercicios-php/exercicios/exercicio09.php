<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nono exercicio</title>
</head>
<body>
    <?php //Trabalhando com strings
    $str = "ã é í ó õ";
    $str = str_replace("ã","a",$str);
    $str = str_replace("é","e",$str);
    $str = str_replace("í","i",$str);
    $str = str_replace("ó","o",$str);
    $str = str_replace("õ","o",$str);
    echo $str;
    ?>
</body>
</html>