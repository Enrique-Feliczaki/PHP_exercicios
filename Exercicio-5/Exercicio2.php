<?php
$arr = [];
$positivos = 0;
$negativos = 0;
$pares = 0;
$impares = 0;

for ($i = 0; $i < 10; $i++) {
    $num = (int)readline("Digite um numero: " . ($i + 1) . ": ");
    $arr[] = $num;

    if ($num > 0) {
        $positivos++;
    } elseif ($num < 0) {
        $negativos++;
    }
    if ($num % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}



echo "A quantidade de numeros positivos sao: $positivos\n";
echo "A quantidade de numeros negativos sao: $negativos\n";
echo "A quantidade de numeros pares sao: $pares\n";
echo "A quantidade de numeros impares sao: $impares";
