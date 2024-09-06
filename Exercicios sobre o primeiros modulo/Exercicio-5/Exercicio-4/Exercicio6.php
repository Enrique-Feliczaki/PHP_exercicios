<?php
function pesoIdeal($altura, $sexo) {
    if ($sexo === 'M' || $sexo === 'm') {
        return 72.7 * $altura - 58;
    } elseif ($sexo === 'F' || $sexo === 'f') {
        return 62.1 * $altura - 44.7;
    } else {
        return "Sexo inválido. Use 'M' para masculino ou 'F' para feminino.";
    }
}

$altura = (float)readline("Digite a altura em metros: ");
$sexo = readline("Digite o sexo (M para masculino, F para feminino): ");
$resultado = pesoIdeal($altura, $sexo);

echo "O peso ideal é: $resultado\n";
