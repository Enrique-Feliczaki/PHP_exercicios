<?php
function soma($a, $b) {
    return $a + $b;
}

function subtracao($a, $b) {
    return $a - $b;
}

function multiplicacao($a, $b) {
    return $a * $b;
}

function divisao($a, $b) {
    if ($b == 0) {
        return "Erro: divisão por zero.";
    }
    return $a / $b;
}

$numero1 = (int)readline("Digite o primeiro número: ");
$numero2 = (int)readline("Digite o segundo número: ");
$opcao = (int)readline("Escolha a operação (1: soma, 2: subtração, 3: multiplicação, 4: divisão): ");

switch ($opcao) {
    case 1:
        echo "Resultado: " . soma($numero1, $numero2) . "\n";
        break;
    case 2:
        echo "Resultado: " . subtracao($numero1, $numero2) . "\n";
        break;
    case 3:
        echo "Resultado: " . multiplicacao($numero1, $numero2) . "\n";
        break;
    case 4:
        echo "Resultado: " . divisao($numero1, $numero2) . "\n";
        break;
    default:
        echo "Opção inválida.\n";
}
