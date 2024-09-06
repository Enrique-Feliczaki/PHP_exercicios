<?php
$salarioBase  = (int)readline("Digite seu salario base: ");
$carro = (int)readline("Digite a quantidade de carro que voce vendeu: ");

$carroVendido = ($salarioBase * $carro) / 100;
$soma = $salarioBase + $carroVendido;

echo "Salario fixo por mes: $salarioBase\n";
echo "Carros vendidos: $carro\n";
echo "Quantidade em reais que ira receber por cada carro vendido: $carroVendido\n";
echo "Salario total recebido ao termino do mes: $soma";
