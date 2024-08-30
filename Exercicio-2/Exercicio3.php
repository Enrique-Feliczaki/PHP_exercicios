<?php
$valorCompra = (int)readline("Digite quantas macas voce comprou: ");

if ($valorCompra >= 12) {
    $valorTotal = $valorCompra * 1;
    echo "O valor total das macas ficam $valorTotal reais\n";
} else {
    $valorTotal = $valorCompra * 1.30;
    echo "O valor total das macas ficam $valorTotal reais \n";
}
