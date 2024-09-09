<?php
trait Objeto
{
    public function teste()
    {
        echo "Testando trait de objeto \n";
    }
}
trait Testando
{
    public $y = 10;
    public function traitTeste()
    {
        echo "Este e o metodo Trait\n";
    }
}
class Central
{
    use Objeto;
    use Testando;
}
$x = new Central;
$x->teste();

$x->traitTeste();

echo $x->y;
