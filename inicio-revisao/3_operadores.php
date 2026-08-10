<?php

//Criando variáveis
$idade = 19;
$temDocumento = false;

// Estrutura de decisão 
if ($idade >= 18 && $temDocumento == true) {
    echo "\nPode tirar a carteira de motorista.";
} else {
    echo "\nNão pode tirar a carteira de motorista.";
}

// Estrutura de decisão 
if ($idade >= 18 || $temDocumento == true) {
    echo "\nPode tirar a carteira de motorista.";
} else {
    echo "\nNão pode tirar a carteira de motorista.";
}

// Operação negação!
$presente = false;

if (!$presente) {
    echo "\nO aluno está presente.";
} else {
    echo "\nO aluno está ausente.";
}
