<?php

// Vetor (array simples)
$frutas = ["Maçã", "Banana", "Uva"];

// Exibindo (usando laço)
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta \n";
}

//  Matriz (array completo Linhas e colunas)
$matriz = [
    ["Max Verstappen", "Lando Norris", "Oscar Piastri"],
    ["Charles Leclerc", "Lewis Hamilton", "George Russell"],
    ["Fernando Alonso", "Carlos Sainz", "Ayrton Senna"]
];

// Exibindo nome dos pilotos
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";

    }
    echo "\n";
}