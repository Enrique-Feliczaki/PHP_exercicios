<?php

class Pessoa
{
    public $nome;
    public $idade;

    function andar($m)
    {
        echo "O $this->nome andou $m metros \n";
    }
}

$nome1 = new Pessoa;
$nome1->nome = "Leonardo";
$nome1->idade = 18;
$nome1->andar(20);
echo $nome1->nome . "\n";
echo $nome1->idade . "\n";
