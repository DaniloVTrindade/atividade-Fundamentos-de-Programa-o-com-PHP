<?php
$valorUnitario = floatval(readline("Digite o valor unitário do produto: "));
$quantidade = intval(readline("Digite a quantidade adquirida: "));

$valorTotal = $valorUnitario * $quantidade;

echo "O valor total da compra é: R$ $valorTotal\n";
?>
