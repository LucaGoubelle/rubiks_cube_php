<?php

require_once "rubikHP/moves/moves.php";
require_once "rubikHP/data/Cube.php";

class AxisMoves extends Moves {
    // y

    public function moveY(Cube $cube): Cube {
        
        $cube->up = $this->rh->rotate($cube->up);
        $cube->down = $this->rh->rotateAsync($cube->down);

        $newFront = unserialize(serialize($cube->right));
        $newRight = unserialize(serialize($cube->back));
        $newLeft = unserialize(serialize($cube->front));
        $newBack = unserialize(serialize($cube->left));

        $cube->front = $this->rh->transfert($cube->front, $newFront);
        $cube->right = $this->rh->transfert($cube->right, $newRight);
        $cube->left = $this->rh->transfert($cube->left, $newLeft);
        $cube->back = $this->rh->transfert($cube->back, $newBack);

        return $cube;
    }

    public function moveYPrime(Cube $cube): Cube {
        for($i=0;$i<3;$i++)
            $cube = $this->moveY($cube);
        return $cube;
    }

    public function moveY2(Cube $cube): Cube {
        for($i=0;$i<2;$i++)
            $cube = $this->moveY($cube);
        return $cube;
    }

    public function moveX(Cube $cube): Cube {
        //todo: implement this method
        return $cube;
    }

    public function moveXPrime(Cube $cube): Cube {
        for($i=0;$i<3;$i++)
            $cube = $this->moveX($cube);
        return $cube;
    }

    public function moveX2(Cube $cube): Cube {
        for($i=0;$i<2;$i++)
            $cube = $this->moveX($cube);
        return $cube;
    }

    public function moveZ(Cube $cube): Cube {
        //todo: implement this method
        return $cube;
    }

    public function moveZPrime(Cube $cube): Cube {
        for($i=0;$i<3;$i++)
            $cube = $this->moveZ($cube);
        return $cube;
    }

    public function moveZ2(Cube $cube): Cube {
        for($i=0;$i<2;$i++)
            $cube = $this->moveZ($cube);
        return $cube;
    }

}

?>