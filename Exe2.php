<?php
class Carro
{
    public $cor;
    public $marca;
    public $velocidade_maxima;
    function setVelocidadeMaxima($velocidadeMaxima)
    {
        $this->velocidade_maxima = $velocidadeMaxima;
    }
    function getVelocidadeMaxima()
    {

        echo "O carro $this->marca consegue chegar em sua velocidade maxima $this->velocidade_maxima km/h\n";
    }
}

$carro1 = new Carro;
$carro1->cor = "Branco";
$carro1->marca = "BMW";
$carro1->velocidade_maxima = "220";

$carro1->setVelocidadeMaxima(200);
$carro1->getVelocidadeMaxima();
