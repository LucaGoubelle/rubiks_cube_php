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

    public function moveLw(Cube $cube, int $layers=2){
        $size = sizeof($cube->left);
        $cube->left = $this->rh->rotate($cube->left);

        $newUp = $this->rh->genEmptyFace($size);
        $newFront = $this->rh->genEmptyFace($size);
        $newDown = $this->rh->genEmptyFace($size);
        $newBack = $this->rh->genEmptyFace($size);

        for($j=0;$j<$layer;$j++)
            for($i=0;$i<$size;$i++){
                $newFront[$i][$j] = $cube->up[$i][$j];
                $newDown[$i][$j] = $cube->front[$i][$j];
                $newBack[$i][$j] = $cube->down[$i][$j];
                $newUp[$i][$size-(1+$j)] = $cube->back[$i][$size-(1+$j)];
            }

        $cube->front = $this->rh->transfert($cube->front, $newFront);
        $cube->up = $this->rh->transfert($cube->up, $this->rh->rotateTwice($newUp));
        $cube->down = $this->rh->transfert($cube->down, $newDown);
        $cube->back = $this->rh->transfert($cube->back, $this->rh->rotateTwice($newBack));
        return $cube;
    }

    public function moveLwPrime(Cube $cube, int $layers=2){
        for($i=0;$i<3;$i++)
            $cube = $this->moveLw($cube, $layers);
        return $cube;
    }

    public function moveLw2(Cube $cube, int $layers=2){
        for($i=0;$i<2;$i++)
            $cube = $this->moveLw($cube, $layers);
        return $cube;
    }
    
    public function moveRw(Cube $cube, int $layers=2){
        $size = sizeof($cube->right);
        $cube->right = $this->rh->rotate($cube->right);

        $newFront = $this->rh->genEmptyFace($size);
        $newUp = $this->rh->genEmptyFace($size);
        $newBack = $this->rh->genEmptyFace($size);
        $newDown = $this->rh->genEmptyFace($size);

        for($j=0;$j<$layers;$j++)
            for($i=0;$i<$size;$i++){
                $newFront[$i][$size-(1+$j)] = $cube->down[$i][$size-(1+$j)];
                $newUp[$i][$size-(1+$j)] = $cube->front[$i][$size-(1+$j)];
                $newBack[$i][$size-(1+$j)] = $cube->up[$i][$size-(1+$j)];
                $newDown[$i][$j] = $cube->back[$i][$j];
            }
        
        $cube->front = $this->rh->transfert($cube->front, $newFront);
        $cube->up = $this->rh->transfert($cube->up, $newUp);
        $cube->back = $this->rh->transfert($cube->back, $this->rh->rotateTwice($newBack));
        $cube->down = $this->rh->transfert($cube->down, $this->rh->rotateTwice($newDown));
        return $cube;
    }

    public function moveRwPrime(Cube $cube, int $layers=2){
        for($i=0;$i<3;$i++)
            $cube = $this->moveRw($cube);
        return $cube;
    }

    public function moveRw2(Cube $cube, int $layers=2){
        for($i=0;$i<2;$i++)
            $cube = $this->moveRw($cube);
        return $cube;
    }
    
}

?>