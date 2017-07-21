<?php

require_once ('vendor/autoload.php');

use App\{ClasseA as A, ClasseB, ClasseC};

$a = new A;
$b = new ClasseB;
$c = new ClasseC;

echo $a;
echo $b;
echo $c;