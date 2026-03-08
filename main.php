<?php

require_once "rubikHP/index.php";
require_once "solverHelpers/index.php";

$builder = new CubeBuilder();
$printer = new CubePrinter();
$mover = new Mover();

$size = 3;
$cube = $builder->build($size);
$printer->print($cube);

echo "-------------------------------------\n";

$cube = $mover->simpleMove($cube, "Dw2");
$printer->print($cube);

echo "-------------------------------------\n";

?>