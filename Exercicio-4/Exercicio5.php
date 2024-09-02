<?php
function somaDivisiveisPorA($a, $b, $c) {
    $soma = 0;
    for ($i = $b; $i <= $c; $i++) {
        if ($i % $a === 0) {
            $soma += $i;
        }
    }
    return $soma;
}

$a = (int)readline("Digite o valor de a (a > 1): ");
$b = (int)readline("Digite o valor de b: ");
$c = (int)readline("Digite o valor de c: ");

if ($a > 1) {
    $resultado = somaDivisiveisPorA($a, $b, $c);
    echo "A soma dos números de $b até $c que são divisíveis por $a é: $resultado\n";
} else {
    echo "O valor de 'a' deve ser maior que 1.\n";
}
