<?php 

require_once "rubikHP/moves/STDMoves.php";
require_once "rubikHP/moves/AxisMoves.php";

class Mover {
    private $moves;
    private $axisMoves;

    public function __construct(){
        $this->moves = new STDMoves();
        $this->axisMoves = new AxisMoves();
    }

    public function simpleMove(Cube $cube, string $move): Cube {
        switch($move){
            case "U": $cube = $this->moves->moveU($cube); break;
            case "U'": $cube = $this->moves->moveUPrime($cube); break;
            case "U2": $cube = $this->moves->moveU2($cube); break;

            case "D": $cube = $this->moves->moveD($cube); break;
            case "D'": $cube = $this->moves->moveDPrime($cube); break;
            case "D2": $cube = $this->moves->moveD2($cube); break;

            case "L": $cube = $this->moves->moveL($cube); break;
            case "L'": $cube = $this->moves->moveLPrime($cube); break;
            case "L2": $cube = $this->moves->moveL2($cube); break;

            case "R": $cube = $this->moves->moveR($cube); break;
            case "R'": $cube = $this->moves->moveRPrime($cube); break;
            case "R2": $cube = $this->moves->moveR2($cube); break;

            case "F": $cube = $this->moves->moveF($cube); break;
            case "F'": $cube = $this->moves->moveFPrime($cube); break;
            case "F2": $cube = $this->moves->moveF2($cube); break;

            case "y": $cube = $this->axisMoves->moveY($cube); break;
            case "y'": $cube = $this->axisMoves->moveYPrime($cube); break;
            case "y2": $cube = $this->axisMoves->moveY2($cube); break;

            default: break;
        }
        return $cube;
    }

    public function multiMoves(Cube $cube, string $moves): Cube {
        $arrMoves = explode(" ", $moves);
        foreach($arrMoves as $move)
            $cube = $this->simpleMove($cube, $move);
        return $cube;
    }

}

?>