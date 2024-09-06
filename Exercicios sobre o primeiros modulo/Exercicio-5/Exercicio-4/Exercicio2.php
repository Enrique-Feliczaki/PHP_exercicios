<?php
function multiploDeQuatro($numero) {
    return $numero % 4 === 0;
}

$numero = (int)readline("Digite um número inteiro: ");
$resultado = multiploDeQuatro($numero);

if ($resultado) {
    echo "O número $numero é múltiplo de 4.\n";
} else {
    echo "O número $numero não é múltiplo de 4.\n";
}
