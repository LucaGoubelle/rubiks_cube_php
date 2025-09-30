<?php

require_once "rubikHP/moves/helpers/RotateHelpers.php";
require_once "rubikHP/data/Cube.php";

class AxisMoves {
    // y

    public function moveY(Cube $cube): Cube {
        
        $cube->up = RotateHelpers::rotate($cube->up);
        $cube->down = RotateHelpers::rotateAsync($cube->down);

        $newFront = unserialize(serialize($cube->right));
        $newRight = unserialize(serialize($cube->back));
        $newLeft = unserialize(serialize($cube->front));
        $newBack = unserialize(serialize($cube->left));

        $cube->front = RotateHelpers::transfert($cube->front, $newFront);
        $cube->right = RotateHelpers::transfert($cube->right, $newRight);
        $cube->left = RotateHelpers::transfert($cube->left, $newLeft);
        $cube->back = RotateHelpers::transfert($cube->back, $newBack);

        return $cube;
    }

    public function moveYPrime(Cube $cube): Cube {
        for($i=0;$i<3;$i++)
            $cube = self::moveY($cube);
        return $cube;
    }

    public function moveY2(Cube $cube): Cube {
        for($i=0;$i<2;$i++)
            $cube = self::moveY($cube);
        return $cube;
    }

    public function moveX(Cube $cube): Cube {
        //todo: implement this method
        return $cube;
    }

    public function moveXPrime(Cube $cube): Cube {
        for($i=0;$i<3;$i++)
            $cube = self::moveX($cube);
        return $cube;
    }

    public function moveX2(Cube $cube): Cube {
        for($i=0;$i<2;$i++)
            $cube = self::moveX($cube);
        return $cube;
    }

    public function moveZ(Cube $cube): Cube {
        //todo: implement this method
        return $cube;
    }

    public function moveZPrime(Cube $cube): Cube {
        for($i=0;$i<3;$i++)
            $cube = self::moveZ($cube);
        return $cube;
    }

    public function moveZ2(Cube $cube): Cube {
        for($i=0;$i<2;$i++)
            $cube = self::moveZ($cube);
        return $cube;
    }

}

?>