<?php
$arr = [];


for ($i = 0; $i < 10; $i++) {
    $arr[$i] = (int)readline("Digite um numero: " . ($i + 1) . ": ");
}
$maiorNumero = $arr[0];

$posicao = 0;

for ($i = 1; $i < 10; $i++) {
    if ($arr[$i] > $maiorNumero) {
        $maiorNumero = $arr[$i];
        $posicao = $i;
    }
}
echo "O maior numero dentro da lista e: $maiorNumero\n";
echo "O maior numero esta localizado na posicao: $posicao";
