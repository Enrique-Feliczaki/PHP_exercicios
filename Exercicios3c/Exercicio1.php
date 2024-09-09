<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $diaNascimento;
    public $mesNascimento;
    public $anoNascimento;

    function calculaIdade() {}
    function informaIdade() {}
    function informaNome() {}
    function ajustaDAtaDeNascimento() {}
}

$pessoa1 = new Pessoa;
$pessoa2 = new Pessoa;

$pessoa1->nome = "Enrique";
$pessoa1->idade = 18;
$pessoa1->diaNascimento = 16;
$pessoa1->mesNascimento = 08;
$pessoa1->anoNascimento = 2006;

$pessoa2->nome = "Emanuelly";
$pessoa2->idade = 18;
$pessoa2->diaNascimento = 11;
$pessoa2->mesNascimento = 05;
$pessoa2->anoNascimento = 2006;
