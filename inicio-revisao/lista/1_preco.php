<?php

// Variáveis
$preco = 100;
$quantidade = 3;

// Cálculo do valor total
$total = $preco * $quantidade;

// O desconto pode ser aplicado?
if ($total >= 200) {
    $desconto = $total * 0.1; // 10% de desconto
    $totalcomdesconto = $total - $desconto;
    echo "Valor total: R$ $totalcomdesconto ";
} else {
    echo "Valor total: R$ $total";
}
