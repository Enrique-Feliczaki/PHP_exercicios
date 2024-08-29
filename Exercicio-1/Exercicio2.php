<?php
$dividendo = (int)readline("Digite o dividendo do codigo: ");
$divisor = (int)readline("Digite o divisor do codigo: ");

$formulaDidendo = $dividendo / $divisor;
$formulaDisor = $dividendo % $divisor;

echo "\nO quociente entre o numero $dividendo e o numero $divisor e: $formulaDidendo\n";
echo "O resto entre o numero $dividendo e o numero $divisor e: $formulaDisor\n";
