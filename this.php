<?php
class Animal
{
    public $nome;
    function escolherNome($nome)
    {
        $this->nome = $nome;
    }
    function latir()
    {
        return "Au au\n";
    }
    function latirForte()
    {
        return strtoupper($this->latir());
    }
}

$animal = new Animal;
$animal->nome;
$animal->escolherNome("Jorge");
echo "O nome do animal é: $animal->nome \n";
echo $animal->latir();
echo $animal->latirForte();
