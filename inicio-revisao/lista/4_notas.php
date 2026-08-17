<?php

// Vetor
$notas = [8, 4, 9, 6, 10];

// Exibindo
foreach ($notas as $indice => $nota) {
    echo "Nota $indice: $nota \n";
}

//Média
$média = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4]) / 5;
//Exibindo a média
echo "\n \n";
echo "Média do grupo: $média \n";

// Exibindo a maior e a menor nota
$maiornota = max($notas);
$menornota = min($notas);
echo "Maior nota: $maiornota \n";
echo "Menor nota: $menornota \n";
