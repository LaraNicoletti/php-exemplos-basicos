<?php

// Variáveis
$altura = 1.52; //metros
$peso = 50; //kilos


function calcularIMC(float $altura, float $peso): float {
    $imc = $peso / ($altura * $altura);
    echo "O IMC é: " . number_format($imc, 2) . "\n";
    return $imc;
}

$imc = calcularIMC($altura, $peso);

// Condições e  classificação do IMC
if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Classificação: Peso normal";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Classificação: Excesso de peso";
} elseif ($imc >= 30 && $imc <= 34.9) {
    echo "Classificação: Obesidade grau I";
} elseif ($imc >= 35 && $imc <= 39.9) {
    echo "Classificação: Obesidade grau II";
} elseif ($imc >= 40) {
    echo "Classificação: Obesidade grau III";
}