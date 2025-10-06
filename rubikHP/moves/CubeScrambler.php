<?php

require_once "rubikHP/moves/Mover.php";
require_once "rubikHP/data/Cube.php";

class CubeScrambler {
    public function __construct() {
        $this->scrambles = [];
        array_push($this->scrambles, "U R2 L2 U F' B2 D F2 L U L2 F2 L2 R U' R2 U2 B' R2 L U F' D2 F' B'");
        array_push($this->scrambles, "U L F R' B' R L2 B' R2 D' R' F R B2 U F D' B' L R' B2 U' F D2 L2");
        array_push($this->scrambles, "B2 F2 R2 F2 B2 D2 B' F R' D2 U B2 D B U R' D U F L' U2 B L R' F");
        array_push($this->scrambles, "F' B' D R' B2 R' L' U2 L2 R2 B D2 U2 F2 L' B D R2 D L D2 F2 U2 L R");
        array_push($this->scrambles, "B' F2 L2 D' F' B2 D2 R2 D2 L' D2 R' F D' B' R' B' U2 R B2 L' F2 L D L");
    }

    public function scramble(Cube $cube): Cube {
        $randint = random_int(0, count($this->scrambles) - 1);
        $scrambling = $this->scrambles[$randint];
        $cube = Mover::multiMoves($cube, $scrambling);
        return $cube;
    }
}

?>