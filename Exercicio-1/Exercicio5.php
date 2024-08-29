<?php
$salarioM = (int)readline("Digite o salario minimo recebido: ");
$gasto = (int)readline("Digite a quantidade de quilowatts gastos por essa residencia: ");
$desconto = (int)readline("Digite a porcentagem do desconto: ");

$formulaSalario = ($salarioM / 7) / 100;
$formulaValor_Pago = $formulaSalario * $gasto;
$formulaDesconto = ($formulaValor_Pago * $desconto) / 100;

$valorTotal = $formulaValor_Pago - $formulaDesconto;

echo "O valor em reias de cada quilowatts e: $formulaSalario\n";
echo "O valor em reais a ser pago e: $formulaValor_Pago\n";
echo "O valor a ser pago junto com $desconto% de desconto é de: $valorTotal\n";
echo "------------------------------------------------------------------------";
