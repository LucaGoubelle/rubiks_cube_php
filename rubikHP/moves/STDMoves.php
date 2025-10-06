<?php

require_once "rubikHP/moves/moves.php";
require_once "rubikHP/data/Cube.php";

class STDMoves extends Moves {

    // U

    public function moveU(Cube $cube): Cube {
        $cube->up = $this->rh->rotate($cube->up);
        $size = count($cube->up);

        $newFront = $this->rh->genEmptyFace($size);
        $newLeft = $this->rh->genEmptyFace($size);
        $newRight = $this->rh->genEmptyFace($size);
        $newBack = $this->rh->genEmptyFace($size);

        for($i=0;$i<$size;$i++) {
            $newFront[0][$i] = $cube->right[0][$i];
            $newLeft[0][$i] = $cube->front[0][$i];
            $newRight[0][$i] = $cube->back[0][$i];
            $newBack[0][$i] = $cube->left[0][$i];
        }

        $cube->front = $this->rh->transfert($cube->front, $newFront);
        $cube->left = $this->rh->transfert($cube->left, $newLeft);
        $cube->right = $this->rh->transfert($cube->right, $newRight);
        $cube->back = $this->rh->transfert($cube->back, $newBack);

        return $cube;
    }

    public function moveUPrime(Cube $cube): Cube {
        for($i = 0; $i < 3; $i++)
            $cube = $this->moveU($cube);
        return $cube;
    }

    public function moveU2(Cube $cube): Cube {
        for($i = 0; $i < 2; $i++)
            $cube = $this->moveU($cube);
        return $cube;
    }

    // D

    public function moveD(Cube $cube): Cube {
        $cube->down = $this->rh->rotate($cube->down);

        $size = count($cube->down);
        $newFront = $this->rh->genEmptyFace($size);
        $newLeft = $this->rh->genEmptyFace($size);
        $newRight = $this->rh->genEmptyFace($size);
        $newBack = $this->rh->genEmptyFace($size);

        for($i=0;$i<$size;$i++){
            $newFront[$size-1][$i] = $cube->left[$size-1][$i];
            $newLeft[$size-1][$i] = $cube->back[$size-1][$i];
            $newRight[$size-1][$i] = $cube->front[$size-1][$i];
            $newBack[$size-1][$i] = $cube->right[$size-1][$i];
        }

        $cube->front = $this->rh->transfert($cube->front, $newFront);
        $cube->left = $this->rh->transfert($cube->left, $newLeft);
        $cube->right = $this->rh->transfert($cube->right, $newRight);
        $cube->back = $this->rh->transfert($cube->back, $newBack);

        return $cube;
    }

    public function moveDPrime(Cube $cube): Cube {
        for($i=0;$i < 3;$i++)
            $cube = $this->moveD($cube);
        return $cube;
    }

    public function moveD2(Cube $cube): Cube {
        for($i=0;$i < 2;$i++)
            $cube = $this->moveD($cube);
        return $cube;
    }

    // R

    public function moveR(Cube $cube): Cube {
        $cube->right = $this->rh->rotate($cube->right);
        
        $size = count($cube->right);
        $newFront = $this->rh->genEmptyFace($size);
        $newUp = $this->rh->genEmptyFace($size);
        $newBack = $this->rh->genEmptyFace($size);
        $newDown = $this->rh->genEmptyFace($size);

        for($i=0;$i < $size;$i++){
            $newFront[$i][$size-1] = $cube->down[$i][$size-1];
            $newUp[$i][$size-1] = $cube->front[$i][$size-1];
            $newBack[$i][$size-1] = $cube->up[$i][$size-1];
            $newDown[$i][0] = $cube->back[$i][0];
        }

        $cube->front = $this->rh->transfert($cube->front, $newFront);
        $cube->up = $this->rh->transfert($cube->up, $newUp);
        $cube->back = $this->rh->transfert($cube->back, $this->rh->rotateTwice($newBack));
        $cube->down = $this->rh->transfert($cube->down, $this->rh->rotateTwice($newDown));

        return $cube;
    }

    public function moveRPrime(Cube $cube): Cube {
        for($i=0;$i < 3;$i++)
            $cube = $this->moveR($cube);
        return $cube;
    }

    public function moveR2(Cube $cube): Cube {
        for($i=0;$i < 2;$i++)
            $cube = $this->moveR($cube);
        return $cube;
    }

    // L

    public function moveL(Cube $cube): Cube {
        $cube->left = $this->rh->rotate($cube->left);
        $size = count($cube->left);
        
        $newUp = $this->rh->genEmptyFace($size);
        $newFront = $this->rh->genEmptyFace($size);
        $newDown = $this->rh->genEmptyFace($size);
        $newBack = $this->rh->genEmptyFace($size);

        for($i=0;$i<$size;$i++){
            $newFront[$i][0] = $cube->up[$i][0];
            $newDown[$i][0] = $cube->front[$i][0];
            $newBack[$i][0] = $cube->down[$i][0];
            $newUp[$i][$size-1] = $cube->back[$i][$size-1];
        }

        $cube->front = $this->rh->transfert($cube->front, $newFront);
        $cube->up = $this->rh->transfert($cube->up, $this->rh->rotateTwice($newUp));
        $cube->down = $this->rh->transfert($cube->down, $newDown);
        $cube->back = $this->rh->transfert($cube->back, $this->rh->rotateTwice($newBack));

        return $cube;
    }

    public function moveLPrime(Cube $cube): Cube {
        for($i=0;$i<3;$i++)
            $cube = $this->moveL($cube);
        return $cube;
    }

    public function moveL2(Cube $cube): Cube {
        for($i=0;$i<2;$i++)
            $cube = $this->moveL($cube);
        return $cube;
    }

    // F

    public function moveF(Cube $cube): Cube {
        $cube->front = $this->rh->rotate($cube->front);

        $size = count($cube->front);
        $newUp = $this->rh->genEmptyFace($size);
        $newLeft = $this->rh->genEmptyFace($size);
        $newRight = $this->rh->genEmptyFace($size);
        $newDown = $this->rh->genEmptyFace($size);

        for($i=0;$i<$size;$i++){
            $newUp[$i][$size-1] = $cube->left[$i][$size-1];
            $newLeft[0][$i] = $cube->down[0][$i];
            $newRight[$size-1][$i] = $cube->up[$size-1][$i];
            $newDown[$i][0] = $cube->right[$i][0];
        }

        $cube->up = $this->rh->transfert($cube->up, $this->rh->rotate($newUp));
        $cube->left = $this->rh->transfert($cube->left, $this->rh->rotate($newLeft));
        $cube->right = $this->rh->transfert($cube->right, $this->rh->rotate($newRight));
        $cube->down = $this->rh->transfert($cube->down, $this->rh->rotate($newDown));

        return $cube;
    }

    public function moveFPrime(Cube $cube): Cube {
        for($i=0;$i < 3;$i++)
            $cube = $this->moveF($cube);
        return $cube;
    }

    public function moveF2(Cube $cube): Cube {
        for($i=0;$i < 2;$i++)
            $cube = $this->moveF($cube);
        return $cube;
    }
}

?>