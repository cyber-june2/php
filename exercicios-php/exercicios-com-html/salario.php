<?php
$horas_trabalhadas = $_POST['horas'];
$salario_minimo = $_POST['salario_minimo'];

if (is_numeric($horas_trabalhadas) && is_numeric($salario_minimo)) {
    $valor_hora = $salario_minimo / 2;

    $salario_bruto = $horas_trabalhadas * $valor_hora;

    $imposto = $salario_bruto * 0.03;

    $salario_liquido = $salario_bruto - $imposto;

    echo "Salário a receber: R$ $salario_liquido";
} else {
    echo "Por favor, insira apenas valores numéricos.";
}
