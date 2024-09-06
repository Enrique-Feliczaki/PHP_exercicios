<?php
$numero = (int)readline("Digite um numero: ");

if ($numero >= 30 && $numero <= 90) {
    echo "Esse numero esta entre 30 e 90";
} elseif ($numero > 120) {
    echo "O numero e maior que 120";
} else {
    echo "Nao se encaixa em nenhuma regra";
}
