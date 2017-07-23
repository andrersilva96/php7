<?php

// Array Destruction

$array = [1, 2, 3];

[$x, $y, $z] = $array;

var_dump($x, $y,$z);

// Associativo

$array = ['index1' => 'teste1', 'index2' => 'teste2'];

['index1' => $a, 'index2' => $b] = $array;

var_dump($a, $b);
