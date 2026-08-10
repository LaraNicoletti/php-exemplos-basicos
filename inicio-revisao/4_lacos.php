<?php

// Laço (FOR) para tabuada do 8
for ($i = 1; $i <= 10; $i++) {
    echo "8 x $i = " . (8 * $i) . "\n";
}

// While -(Enquanto) Contagem regressiva
$i = 5;
while ($i > 0) {
    echo $i . "\n";
    $i--;
}

// Do While - (Faça enquanto) Executa ao menos 1 vez
$x = 0;
do {
    echo "x vale: $x \n";
    $x++;
} while ($x <= 10);