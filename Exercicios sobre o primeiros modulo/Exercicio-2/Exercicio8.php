<?php
echo "**Beneficios**\n";
echo "À vista em dinheiro com 10% de desconto.\n";
echo "À vista no cartão com 5% de desconto.\n";
echo "Em 2 vezes, preço normal da etiqueta.\n";
echo "Em 3 vezes, preço normal da etiqueta com juros de 10%\n";


$selecaoCompra = readline("Digite qual a forma de pagamento| | A VISTA | | A VISTA CARTAO | | DUAS VEZES | | TRES VEZES:  ");

if ($selecaoCompra == "A VISTA" || $selecaoCompra == "a vista" || $selecaoCompra == "A vista") {
    $aVista = (float)readline("A Vista = informe o valor a ser pago: ");
    $formulaAVista = ($aVista - 10) / 100 * $aVista;

    echo "O valor a ser pago e: $formulaAVista";
} elseif ($selecaoCompra == "A VISTA CARTAO" || $selecaoCompra == "a vista cartao" || $selecaoCompra == "A vista cartao") {
    $aVistaCartao = (float)readline("A Vista no cartao = informe o valor a ser pago: ");
    $formulaAVistaCartao = ($aVistaCartao - 5) / 100 * $aVistaCartao;

    echo "O valor a ser pago e: $formulaAVistaCartao";
} elseif ($selecaoCompra == "DUAS VEZES" || $selecaoCompra == "duas vezes" || $selecaoCompra == "Duas vezes") {
    $duasVezes = (float)readline("Duas Vezes = informe o valor a ser pago:  ");
    $formulaDuasVezes = "Preço normal da etiqueta";


    echo "O valor a ser pago e: $duasVezes";
} elseif ($selecaoCompra == "TRES VEZES" || $selecaoCompra == "tres vezes" || $selecaoCompra == "Tres vezes") {
    $tresVezes = (float)readline("Tres Vezes = informe o valor a ser pago:  ");
    $formulaTresVezes = $tresVezes * (10 / 100) * 3;
    $resultado = $formulaTresVezes + $tresVezes;
    echo "O valor a ser pago e: $resultado";
}
