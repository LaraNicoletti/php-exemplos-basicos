<?php
//  Exemplo de função em PHP (Uma função sempre tem retorno)
function somar(float $a, float $b): float {
    return $a + $b;
}

// Chamando a função
echo somar(4.5, 9.3);
echo "<br>";

// Exemplo de procidimento (Não rem return, pois não calcula)
function saudacao($nome = "Aluno") {
    echo "Olá, $nome! Seja bem-vindo(a)!";
}

// Usando/exibindo (Procedimento)
saudacao("Maria Smart");
echo "<br>";
saudacao();