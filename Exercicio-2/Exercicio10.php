<?php
$valor = (float)readline("Digite o valor do produto: \n");

if ($valor < 20) {
    $formula = ((45 / 100) / $valor) * 100;
    $resultado = $valor + $formula;
    echo "O valor final e : $resultado";
} else {
    $formula = ((30 / 100) / $valor) * 100;
    $resultado = $valor + $formula;
    echo "O valor final e : $resultado";
}
