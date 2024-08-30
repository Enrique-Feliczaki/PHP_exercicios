<?php
$anoNascimento = (int)readline("Digite o seu ano de nascimento: ");

$anoAtual = 2024;
$formulaAno = $anoAtual - $anoNascimento;

echo "voce tem $formulaAno\n";

if ($formulaAno >= 16) {
    echo "Voce pode votar\n";
} else {
    echo "Voce nao pode votar ainda\n";
}

if ($formulaAno >= 18) {
    echo "Voce pode tirar a carteira de motorista\n";
} else {
    echo "Voce nao pode tirar a carteira de motorista ainda\n";
}
