<?php
    $peso = $_POST['txtpeso'];
    $altura = $_POST['txtaltura'];

    function imc($peso, $altura)
    {
        $result = $peso / ($altura * $altura);
        return $result;
    }

    $situacao = [
        18.5 => " . Abaixo do peso Ideal!",
        24.9 => " . Peso Ideal!",
        29.9 => " . Sobrepeso",
        30.0 => " . Obesidade"
    ];

    echo "Seu IMC é " . imc($peso, $altura);

    foreach ($situacao as $limit => $message) {
        if (imc($peso, $altura) < $limit) {
            echo $message;
            break;
        }
    }

