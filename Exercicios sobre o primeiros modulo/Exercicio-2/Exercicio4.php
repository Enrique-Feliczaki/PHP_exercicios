<?php
$primeiraNota = (int)readline("Digite sua primeira nota: ");
$segundaNota = (int)readline("Digite sua segunda nota: ");

$formula = ($primeiraNota + $segundaNota) / 2;

if ($formula >= 6) {
    echo "Voce foi aprovado!!";
    echo "Sua nota foi $formula";
} else {
    echo "Voce foi reprovado, estude mais!";
    echo "Sua nota foi $formula";
}
