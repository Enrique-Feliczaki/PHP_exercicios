<?php
$valor = (int)readline("Digite o valor do produto: ");

$dividir = 1 / 100;
$multiplacacao = $valor * $dividir;
$soma = $multiplacacao + $valor;

echo "Obtendo um aumento de 1% o valor do produto que era $valor agora sera: $soma ";
