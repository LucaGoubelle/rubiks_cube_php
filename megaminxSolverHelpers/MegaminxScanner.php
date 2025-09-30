<?php

class MegaminxScanner {
    
    public function scanCenter($minx, $orient){
        $hmap = [
            "up" => $minx->up[1][0],
            "front" => $minx->front[1][0],
            "left" => $minx->left[1][0],
            "right" => $minx->right[1][0],
            "downLeft" => $minx->downLeft[1][0],
            "downRight" => $minx->downRight[1][0],
            "absLeft" => $minx->absLeft[1][0],
            "absRight" => $minx->absRight[1][0],
            "backLeft" => $minx->backLeft[1][0],
            "backRight" => $minx->backRight[1][0],
            "back" => $minx->back[1][0],
            "down" => $minx->down[1][0]
        ];
        return (array_key_exists($orient, $hmap)) ? $hmap[$orient] : "???";
    }

    public function scanEdge($minx, $orient){
        //todo: implement this
        return "???";
    }

    public function scanCorner($minx, $orient){
        //todo: implement this
        return "???";
    }
}

?>