<?php

// Passando valores pela URL (Método GET)
//http://localhost/php-exemplos-basicos/2_opera_variaveis.php?numero1=10&numero2=5

// Recebe 2 valores
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

// Verifica se os valores foram passados corretamente
// A função nativa do PHP "isset" faz isso
if (isset($numero1) && isset($numero2)) {
   $numero1 = (float)$numero1;
   $numero2 = (float)$numero2;

// Cálculos
$soma = $numero1 + $numero2 . "<br>";
$subtracao = $numero1 - $numero2 . "<br>";
$multiplicacao = $numero1 * $numero2 . "<br>";
$divisao = $numero1 / $numero2 . "<br>";

// Exibindo resultados
echo "Soma: $soma <br>";
echo "Subtração: $subtracao <br>";
echo "Multiplicação: $multiplicacao <br>";
echo "Divisão: $divisao <br>";

} else {
    echo "Por favor, forneça os valores pela URL";
}

