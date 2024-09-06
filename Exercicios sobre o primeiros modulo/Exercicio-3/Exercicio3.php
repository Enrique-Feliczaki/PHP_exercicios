<?php
$soma = 0;
$quantidade = 0;
while (true) {
    $valor = (int)readline();
    if ($valor === 0) {
        break;
    }
    $soma += $valor;
    $quantidade++;
}
if ($quantidade > 0) {
    $media = $soma / $quantidade;
    echo "Somatória: $soma\n";
    echo "Média: $media\n";
    echo "Quantidade de valores lidos: $quantidade\n";
} else {
    echo "Nenhum valor foi lido.\n";
}
