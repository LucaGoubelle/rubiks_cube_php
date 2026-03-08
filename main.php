<?php

require_once "rubikHP/index.php";
require_once "solverHelpers/index.php";

$printer = new CubePrinter();
$mover = new Mover();
$loader = new CubeLoader();

$cube = $loader->load("res/saves/cube3x3.json");
$printer->print($cube);

echo "-------------------------------------\n";

$cube = $mover->simpleMove($cube, "Dw2");
$printer->print($cube);

echo "-------------------------------------\n";

?>