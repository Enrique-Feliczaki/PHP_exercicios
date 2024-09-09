<?php
interface Caracteristicas
{
    const nome = "Emanuelly";
    public function falar();
}

class Humano implements Caracteristicas
{
    public $idade = 18;
    public function falar()
    {
        echo "Olá Mundo\n";
    }
    public function dizerNome()
    {
        echo "Meu nome e: " . self::nome . "\n";
    }
}

$enrique = new Humano;
$emanuelly = new Humano;
$enrique->falar();
$emanuelly->dizerNome();
