<?php
function ehPar($numero) {
    return $numero % 2 === 0;
}

$numero = (int)readline("Digite um número inteiro: ");
$resultado = ehPar($numero);

if ($resultado) {
    echo "O número $numero é par.\n";
} else {
    echo "O número $numero é ímpar.\n";
}
