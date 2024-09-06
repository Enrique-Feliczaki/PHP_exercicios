<?php
$num = [];

for ($i = 0; $i < 10; $i++) {
    $num[$i] = (int)readline("Digite um numero: " . ($i + 1) . ": ");
}
for ($i = 9; $i >= 0; $i--) {
    echo $num[$i] . "\n";
}
