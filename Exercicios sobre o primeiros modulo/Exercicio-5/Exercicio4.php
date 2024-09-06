<?php
$a = [];

for ($i = 0; $i < 10; $i++) {
    $a[$i] = (int)readline("Digite um numero: " . ($i + 1) . "Para o vetor A: ");
}

$b = (int)readline("Digite o valor de B: ");

$c = [];

for ($i = 0; $i < 10; $i++) {
    $c[$i] = $a[$i] * $b;
}

echo "O valor do C e: \n";
foreach ($c as $valor) {
    echo "$valor\n";
}
