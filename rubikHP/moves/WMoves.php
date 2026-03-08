<?php

require_once "rubikHP/moves/moves.php";
require_once "rubikHP/data/Cube.php";

class WMoves extends Moves {

    public function moveUw(Cube $cube, int $layers=2): Cube {
        $cube->up = $this->rh->rotate($cube->up);
        $size = count($cube->up);

        $newFront = $this->rh->genEmptyFace($size);
        $newLeft = $this->rh->genEmptyFace($size);
        $newRight = $this->rh->genEmptyFace($size);
        $newBack = $this->rh->genEmptyFace($size);

        for($j=0;$j<$layers;$j++)
            for($i=0;$i<$size;$i++) {
                $newFront[$j][$i] = $cube->right[$j][$i];
                $newLeft[$j][$i] = $cube->front[$j][$i];
                $newRight[$j][$i] = $cube->back[$j][$i];
                $newBack[$j][$i] = $cube->left[$j][$i];
            }

        $cube->front = $this->rh->transfert($cube->front, $newFront);
        $cube->left = $this->rh->transfert($cube->left, $newLeft);
        $cube->right = $this->rh->transfert($cube->right, $newRight);
        $cube->back = $this->rh->transfert($cube->back, $newBack);

        return $cube;
    }

    public function moveUwPrime(Cube $cube, int $layers=2): Cube{
        for($i=0;$i<3;$i++)
            $cube = $this->moveUw($cube, $layers);
        return $cube;
    }

    public function moveUw2(Cube $cube, int $layers=2): Cube{
        for($i=0;$i<2;$i++)
            $cube = $this->moveUw($cube, $layers);
        return $cube;
    }

    public function moveDw(Cube $cube, int $layers=2): Cube {
        $cube->down = $this->rh->rotate($cube->down);

        $size = count($cube->down);
        $newFront = $this->rh->genEmptyFace($size);
        $newLeft = $this->rh->genEmptyFace($size);
        $newRight = $this->rh->genEmptyFace($size);
        $newBack = $this->rh->genEmptyFace($size);

        for($j=0;$j<$layers;$j++)
            for($i=0;$i<$size;$i++){
                $newFront[$size-1-$j][$i] = $cube->left[$size-1-$j][$i];
                $newLeft[$size-1-$j][$i] = $cube->back[$size-1-$j][$i];
                $newRight[$size-1-$j][$i] = $cube->front[$size-1-$j][$i];
                $newBack[$size-1-$j][$i] = $cube->right[$size-1-$j][$i];
            }

        $cube->front = $this->rh->transfert($cube->front, $newFront);
        $cube->left = $this->rh->transfert($cube->left, $newLeft);
        $cube->right = $this->rh->transfert($cube->right, $newRight);
        $cube->back = $this->rh->transfert($cube->back, $newBack);

        return $cube;
    }

    public function moveDwPrime(Cube $cube, int $layers=2){
        for($i=0;$i<3;$i++)
            $cube = $this->moveDw($cube, $layers);
        return $cube;
    }

    public function moveDw2(Cube $cube, int $layers=2){
        for($i=0;$i<2;$i++)
            $cube = $this->moveDw($cube, $layers);
        return $cube;
    }
    
}

?>