<?php
$idade = (int)readline("Digite a sua idade: ");

if ($idade >= 5 && $idade <= 7) {
    echo "Voce e classificado como Infantil A";
} elseif ($idade >= 8 && $idade <= 10) {
    echo "Voce e classificado como Infantil B";
} elseif ($idade >= 11 && $idade <= 13) {
    echo "Voce e classificado como Juvenil A";
} elseif ($idade >= 14 && $idade <= 17) {
    echo "Voce e classificado como Juvenil B";
} elseif ($idade >= 18) {
    echo "Voce e classificado como Senior";
}
