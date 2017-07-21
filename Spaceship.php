<?php

// A funcao abaixo diz que todos os metodos e parametros que receber vai ser forçado tipo Java
// declare(strict_types = 1);

/*
	Novidades no metodo:
	1. Especificar que tipo de valor ele vai forçar
	2. Especificando o tipo do retorno
	3. Spaceship, tipo de confição que verifica se é maior, menor ou igual:
	Retorno do Spaceship:
		Menor: -1
		Igual: 0
		Maior: 1
*/

function spaceship(int $a, int $b):int{
	return $a <=> $b;
}
echo spaceship(2, 2);