<?php
$soma = 0;
for ($i = 1; $i <= 10; $i++) {
    $numero = (int)readline("Digite um numero: ");
    $soma = $soma + $numero;
}
$media = $soma / 10;
echo "Soma: $soma\n";
echo "Media: $media";
