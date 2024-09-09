<?php

class Car
{
    public $rodas = 4;
    private $vidro = "Sem pelicula";
    protected $portas = 4;
    public function getVidro()
    {
        return $this->vidro;
    }
    public function getPortas()
    {
        return $this->portas;
    }
}
class Mecanico
{
    public function alterarRodas($carro)
    {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula)
    {
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;
echo $carro->rodas . "\n";

$enrique = new Mecanico;
$enrique->alterarRodas($carro);
echo $carro->rodas . "\n";

//Não pode alterar pq é privado;
// $enrique->colocarPelicula($carro, "G20");
//$carro->peliculaDeFabrica($pelicula);
echo $carro->getVidro() . "\n";

//echo $carro->portas;
echo $carro->getPortas();
