<?php

require_once "rubikHP/moves/helpers/RotateHelpers.php";
require_once "rubikHP/data/Cube.php";

class Moves {

    // U

    public function moveU(Cube $cube): Cube {
        $cube->up = RotateHelpers::rotate($cube->up);
        $size = count($cube->up);

        $newFront = RotateHelpers::genEmptyFace($size);
        $newLeft = RotateHelpers::genEmptyFace($size);
        $newRight = RotateHelpers::genEmptyFace($size);
        $newBack = RotateHelpers::genEmptyFace($size);

        for($i=0;$i<$size;$i++) {
            $newFront[0][$i] = $cube->right[0][$i];
            $newLeft[0][$i] = $cube->front[0][$i];
            $newRight[0][$i] = $cube->back[0][$i];
            $newBack[0][$i] = $cube->left[0][$i];
        }

        $cube->front = RotateHelpers::transfert($cube->front, $newFront);
        $cube->left = RotateHelpers::transfert($cube->left, $newLeft);
        $cube->right = RotateHelpers::transfert($cube->right, $newRight);
        $cube->back = RotateHelpers::transfert($cube->back, $newBack);

        return $cube;
    }

    public function moveUPrime(Cube $cube): Cube {
        for($i = 0; $i < 3; $i++)
            $cube = self::moveU($cube);
        return $cube;
    }

    public function moveU2(Cube $cube): Cube {
        for($i = 0; $i < 2; $i++)
            $cube = self::moveU($cube);
        return $cube;
    }

    // D

    public function moveD(Cube $cube): Cube {
        $cube->down = RotateHelpers::rotate($cube->down);

        $size = count($cube->down);
        $newFront = RotateHelpers::genEmptyFace($size);
        $newLeft = RotateHelpers::genEmptyFace($size);
        $newRight = RotateHelpers::genEmptyFace($size);
        $newBack = RotateHelpers::genEmptyFace($size);

        for($i=0;$i<$size;$i++){
            $newFront[$size-1][$i] = $cube->left[$size-1][$i];
            $newLeft[$size-1][$i] = $cube->back[$size-1][$i];
            $newRight[$size-1][$i] = $cube->front[$size-1][$i];
            $newBack[$size-1][$i] = $cube->right[$size-1][$i];
        }

        $cube->front = RotateHelpers::transfert($cube->front, $newFront);
        $cube->left = RotateHelpers::transfert($cube->left, $newLeft);
        $cube->right = RotateHelpers::transfert($cube->right, $newRight);
        $cube->back = RotateHelpers::transfert($cube->back, $newBack);

        return $cube;
    }

    public function moveDPrime(Cube $cube): Cube {
        for($i=0;$i < 3;$i++)
            $cube = self::moveD($cube);
        return $cube;
    }

    public function moveD2(Cube $cube): Cube {
        for($i=0;$i < 2;$i++)
            $cube = self::moveD($cube);
        return $cube;
    }

    // R

    public function moveR(Cube $cube): Cube {
        $cube->right = RotateHelpers::rotate($cube->right);
        
        $size = count($cube->right);
        $newFront = RotateHelpers::genEmptyFace($size);
        $newUp = RotateHelpers::genEmptyFace($size);
        $newBack = RotateHelpers::genEmptyFace($size);
        $newDown = RotateHelpers::genEmptyFace($size);

        for($i=0;$i < $size;$i++){
            $newFront[$i][$size-1] = $cube->down[$i][$size-1];
            $newUp[$i][$size-1] = $cube->front[$i][$size-1];
            $newBack[$i][$size-1] = $cube->up[$i][$size-1];
            $newDown[$i][0] = $cube->back[$i][0];
        }

        $cube->front = RotateHelpers::transfert($cube->front, $newFront);
        $cube->up = RotateHelpers::transfert($cube->up, $newUp);
        $cube->back = RotateHelpers::transfert($cube->back, RotateHelpers::rotateTwice($newBack));
        $cube->down = RotateHelpers::transfert($cube->down, RotateHelpers::rotateTwice($newDown));

        return $cube;
    }

    public function moveRPrime(Cube $cube): Cube {
        for($i=0;$i < 3;$i++)
            $cube = self::moveR($cube);
        return $cube;
    }

    public function moveR2(Cube $cube): Cube {
        for($i=0;$i < 2;$i++)
            $cube = self::moveR($cube);
        return $cube;
    }

    // L

    public function moveL(Cube $cube): Cube {
        $cube->left = RotateHelpers::rotate($cube->left);
        $size = count($cube->left);
        
        $newUp = RotateHelpers::genEmptyFace($size);
        $newFront = RotateHelpers::genEmptyFace($size);
        $newDown = RotateHelpers::genEmptyFace($size);
        $newBack = RotateHelpers::genEmptyFace($size);

        for($i=0;$i<$size;$i++){
            $newFront[$i][0] = $cube->up[$i][0];
            $newDown[$i][0] = $cube->front[$i][0];
            $newBack[$i][0] = $cube->down[$i][0];
            $newUp[$i][$size-1] = $cube->back[$i][$size-1];
        }

        $cube->front = RotateHelpers::transfert($cube->front, $newFront);
        $cube->up = RotateHelpers::transfert($cube->up, RotateHelpers::rotateTwice($newUp));
        $cube->down = RotateHelpers::transfert($cube->down, $newDown);
        $cube->back = RotateHelpers::transfert($cube->back, RotateHelpers::rotateTwice($newBack));

        return $cube;
    }

    public function moveLPrime(Cube $cube): Cube {
        for($i=0;$i<3;$i++)
            $cube = self::moveL($cube);
        return $cube;
    }

    public function moveL2(Cube $cube): Cube {
        for($i=0;$i<2;$i++)
            $cube = self::moveL($cube);
        return $cube;
    }

    // F

    public function moveF(Cube $cube): Cube {
        $cube->front = RotateHelpers::rotate($cube->front);

        $size = count($cube->front);
        $newUp = RotateHelpers::genEmptyFace($size);
        $newLeft = RotateHelpers::genEmptyFace($size);
        $newRight = RotateHelpers::genEmptyFace($size);
        $newDown = RotateHelpers::genEmptyFace($size);

        for($i=0;$i<$size;$i++){
            $newUp[$i][$size-1] = $cube->left[$i][$size-1];
            $newLeft[0][$i] = $cube->down[0][$i];
            $newRight[$size-1][$i] = $cube->up[$size-1][$i];
            $newDown[$i][0] = $cube->right[$i][0];
        }

        $cube->up = RotateHelpers::transfert($cube->up, RotateHelpers::rotate($newUp));
        $cube->left = RotateHelpers::transfert($cube->left, RotateHelpers::rotate($newLeft));
        $cube->right = RotateHelpers::transfert($cube->right, RotateHelpers::rotate($newRight));
        $cube->down = RotateHelpers::transfert($cube->down, RotateHelpers::rotate($newDown));

        return $cube;
    }

    public function moveFPrime(Cube $cube): Cube {
        for($i=0;$i < 3;$i++)
            $cube = self::moveF($cube);
        return $cube;
    }

    public function moveF2(Cube $cube): Cube {
        for($i=0;$i < 2;$i++)
            $cube = self::moveF($cube);
        return $cube;
    }
}

?>