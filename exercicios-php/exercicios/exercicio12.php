<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Décimo segundo programa</title>
</head>
<body>
    <?php
    $num1 = 7+5*2;
    $num2 = (7+5)*2;

    echo $num1 ."<br>";
    echo $num2 ."<br><br>";

    $num3 = "2" + "2";
    echo $num3 ."<br>";
    echo gettype($num3) ."<br>";
    echo var_dump($num3) ."<br><br>";

    $num3 = "2" . "2";
    echo $num3 ."<br>";
    echo gettype($num3) ."<br>";
    echo var_dump($num3) ."<br><br>";

    $num4 = 4;
    echo is_int( $num4 ) ?"verdadeiro":"falso";
    ?>
</body>
</html>