<?php
class Humano
{
    public const olhos = 2;
    public const bracos = 2;
    public const pernas = 2;

    function mostrarConstante()
    {
        echo self::bracos;
    }
}
$enrique = new Humano;
echo $enrique::olhos;
$enrique->mostrarConstante();
