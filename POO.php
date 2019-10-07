<?php

// Interface é como ter os ingredientes de uma receita do bolo sem o modo de preparo
interface AnimalInterface
{
    public function locomover();
}

abstract class Animal
{
    public $name;
}

class Passaro extends Animal implements AnimalInterface
{
    public function locomover()
    {
        echo "<br>$this->name pode voar!";
    }
}

class Cachorro extends Animal implements AnimalInterface
{
    public function locomover()
    {
        echo "<br>$this->name pode correr!";
    }
}

$bird = new Passaro();
$bird->name = 'Pombo';
$bird->locomover();

$dog = new Cachorro();
$dog->name = 'Husky';
$dog->locomover();
