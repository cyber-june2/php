<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
    $media = ($nota1 * 2 + $nota2 * 3 + $nota3 * 5) / (2 + 3 + 5);

    if ($media >= 8.0) {
        echo "Parabéns! Sua média final é $media. Você foi aprovado!";
    } else {
        echo "Sua média final é $media. Infelizmente, você foi reprovado.";
    }
} else {
    echo "Por favor, insira apenas valores numéricos.";
}
