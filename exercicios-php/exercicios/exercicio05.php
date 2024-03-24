<html>
<head>
    <title>Quinto programa</title>
</head>
<body>
    <?php //Variaveis referenciais
    $a = 2;
    $b = $a;
    $b += 8;
    echo $a ."<br>";
    echo $b;
    ?>
    <br><br>
    <?php
    $x = 2;
    $y = &$x;
    $y += 8;
    echo $x ."<br>";
    echo $y;
    ?>
</body>
</html>