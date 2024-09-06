<?php
function somaEntreNumeros($num1, $num2) {
    if ($num1 > $num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }
    
    $soma = 0;
    for ($i = $num1 + 1; $i < $num2; $i++) {
        $soma += $i;
    }
    
    return $soma;
}

$num1 = (int)readline("Digite o primeiro número inteiro positivo: ");
$num2 = (int)readline("Digite o segundo número inteiro positivo: ");

if ($num1 > 0 && $num2 > 0) {
    $resultado = somaEntreNumeros($num1, $num2);
    echo "A soma dos números entre $num1 e $num2 é: $resultado\n";
} else {
    echo "Por favor, digite números inteiros positivos.\n";
}
