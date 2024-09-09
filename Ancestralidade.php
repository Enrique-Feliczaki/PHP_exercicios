<?php
class Humano {}
class Animal {}
class Professor extends Humano {}
$enrique = new Humano;
$yoda = new Animal;
$emanuelly = new Professor;
if ($enrique instanceof Humano) {
    echo "Enrique é um Humano\n";
}

if ($yoda instanceof Animal) {
    echo "Yoda é um Cachorro\n";
}

if ($yoda instanceof Humano) {
    echo "Yoda é um Humano\n";
} else {
    echo "O Yodao nao é um Humano\n";
}


if ($emanuelly instanceof Humano) {
    echo "Emanuelly é um Humano\n";
} else {
    echo "Emanuelly nao é um Humano\n";
}



if ($emanuelly instanceof Professor) {
    echo "Emanuelly é uma Professora\n";
} else {
    echo "Emanuelly nao é uma Professora\n";
}


if ($yoda instanceof Professor) {
    echo "Yoda é um Professor\n";
} else {
    echo "O Yodao nao é um Professor\n";
}
