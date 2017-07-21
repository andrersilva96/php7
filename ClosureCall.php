<?php

// Closure Call

class Classe
{
	private $x = 123;
}

$funcaoAnonima = function(){
	return $this->x;
};

/* Essa função faz com que me retorne o valor que esta na
   classe sem eu precisar acessar diretamente
*/
var_dump($funcaoAnonima->call(new Classe));