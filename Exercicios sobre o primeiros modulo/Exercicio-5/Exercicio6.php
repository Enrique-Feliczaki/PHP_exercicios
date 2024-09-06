<?php
$a = [];
$b = [];
for ($i = 0; $i < 10; $i++) {
    $a[$i] = (int)readline("Digite um numero: " . ($i + 1) . "Para o valor A: ");
}
for ($i = 0; $i < 10; $i++) {
    $b[$i] = (int)readline("Digite um numero: " . ($i + 1) . "Para o valor B: ");
}


echo "Resultado";
for ($i = 0; $i < 10; $i++) {
    $multiplicacao = $a[$i] * $b[$i];
    echo "$a[$i] * $b[$i] = $multiplicacao\n";
}
