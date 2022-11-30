<?php

use App\Calcul;

require "vendor/autoload.php";
// $t = new Calcul();
// $ts = $t->add(10, 20);
$ts = Calcul::add(10, 25);
echo $ts;
echo 'hello world';
