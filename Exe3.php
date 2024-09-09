<?php
class Humano
{
    public $gritar = "AAAAA";

    public function falar()
    {
        echo "Estou falando\n";
    }
}
class Professor extends Humano
{
    public $enscinar = "Dando aula";
    public function darAula()
    {
        echo $this->enscinar . "\n";
    }
}

$enrique = new Humano;
echo $enrique->gritar . "\n";
echo $enrique->falar();

$emanuelly = new Professor;
echo $emanuelly->gritar . "\n";
echo $emanuelly->falar();
echo $emanuelly->darAula();
