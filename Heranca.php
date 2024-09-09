<?php
class Humano
{
    public $idade = 29;
    public function falar()
    {
        echo "Ola mundo \n";
    }

    private function gritar()
    {
        echo "AAAAAAAAAAA\n";
    }


    public function acessarGrito()
    {
        $this->gritar();
    }

    protected function falarBaixo()
    {
        echo "pisiupisiu\n";
    }
    public function falarBaixinho()
    {
        $this->falarBaixo();
    }
}
class Programador extends Humano
{
    public function acessaFalarBaixinho()
    {
        $this->falarBaixinho();
    }
}

$enrique = new Humano;
$enrique->falar();
$enrique->acessarGrito();
$enrique->falarBaixinho();

$emanuelly = new Programador;
echo $emanuelly->idade . "\n";
$emanuelly->falar();
$emanuelly->acessarGrito();
$emanuelly->acessaFalarBaixinho();
