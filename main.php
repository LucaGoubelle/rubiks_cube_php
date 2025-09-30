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

$cube = $mover->simpleMove($cube, "F");
$printer->print($cube);

echo "-------------------------------------\n";

$scanner = new Cube3x3Scanner();

echo $scanner->scanCorner($cube, "up_front_right") . "\n";
echo $scanner->scanEdge($cube, "up_front") . "\n";
echo $scanner->scanCenter($cube, "up") . "\n";

echo "-------------------------------------\n";

?>