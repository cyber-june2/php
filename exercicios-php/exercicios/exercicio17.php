<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Décimo sétimo programa</title>
</head>

<body>
    <?php
    $num = 80;
    $num2 = $num * 2;

    if(is_numeric($num)){
        echo($num2 . "<br>");
        if($num2 > 100){
            echo "Maior que 100!";
        }
        }
    ?>
</body>

</html>