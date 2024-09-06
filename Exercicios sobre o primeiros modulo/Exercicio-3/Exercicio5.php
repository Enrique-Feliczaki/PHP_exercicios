<?php
$maior = null;
$menor = null;

while (true) {
    $valor = (int)readline();
    if ($valor === 0) {
        break;
    }
    if ($maior === null || $valor > $maior) {
        $maior = $valor;
    }
    if ($menor === null || $valor < $menor) {
        $menor = $valor;
    }
}

if ($maior !== null && $menor !== null) {
    echo "Maior valor: $maior\n";
    echo "Menor valor: $menor\n";
} else {
    echo "Nenhum valor válido foi lido.\n";
}
