<?php
$base = (int)readline("Digite a base do retangulo: ");
$altura = (int)readline("Digite a altura do retangulo: ");
$area = $base * $altura;
$perimetro = 2 * ($base + $altura);
$formulaDiagonal = sqrt(($base ** 2) + ($altura ** 2));


echo "A base e: $base\n";
echo "A altura e: $altura\n";
echo "A area do retangulo e: $area\n";
echo "O perimetro do retangulo e: $perimetro\n";
echo "A diagonal do retangulo e: $formulaDiagonal\n";
