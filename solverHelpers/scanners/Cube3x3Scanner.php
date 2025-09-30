<?php

require_once "Cube2x2Scanner.php";
require_once "rubikHP/data/Cube.php";

class Cube3x3Scanner extends Cube2x2Scanner {

    public function scanCenter(Cube $cube, string $orient): string {
        $hmap = [
            "up" => $cube->up[1][1],
            "front" => $cube->front[1][1],
            "left" => $cube->left[1][1],
            "right" => $cube->right[1][1],
            "down" => $cube->down[1][1],
            "back" => $cube->back[1][1],
        ];
        return (array_key_exists($orient, $hmap)) ? $hmap[$orient] : "???";
    }

    public function scanEdge(Cube $cube, string $orient): string {
        $hmap = [
            "up_front" => $cube->up[2][1]."_".$cube->front[0][1],
            "up_left" => $cube->up[1][0]."_".$cube->left[0][1],
            "up_right" => $cube->up[1][2]."_".$cube->right[0][1],
            "up_back" => $cube->up[0][1]."_".$cube->back[0][1],

            "front_left" => $cube->front[1][0]."_".$cube->left[1][2],
            "front_right" => $cube->front[1][2]."_".$cube->right[1][0],
            "back_left" => $cube->back[1][2]."_".$cube->left[1][0],
            "back_right" => $cube->back[1][0]."_".$cube->right[1][2],

            "down_front" => $cube->down[0][1]."_".$cube->front[2][1],
            "down_left" => $cube->down[1][0]."_".$cube->left[2][1],
            "down_right" => $cube->down[1][2]."_".$cube->right[2][1],
            "down_back" => $cube->down[2][1]."_".$cube->back[2][1]
        ];
        return (array_key_exists($orient, $hmap)) ? $hmap[$orient] : "???";
    }

    public function scanEdges($cube){
        $hmap = [];
        $hmap["up_front"] = self::scanEdge($cube, "up_front");
        $hmap["up_left"] = self::scanEdge($cube, "up_left");
        $hmap["up_right"] = self::scanEdge($cube, "up_right");
        $hmap["up_back"] = self::scanEdge($cube, "up_back");
        
        $hmap["front_left"] = self::scanEdge($cube, "front_left");
        $hmap["front_right"] = self::scanEdge($cube, "front_right");
        $hmap["back_left"] = self::scanEdge($cube, "back_left");
        $hmap["back_right"] = self::scanEdge($cube, "back_right");

        $hmap["down_front"] = self::scanEdge($cube, "down_front");
        $hmap["down_left"] = self::scanEdge($cube, "down_left");
        $hmap["down_right"] = self::scanEdge($cube, "down_right");
        $hmap["down_back"] = self::scanEdge($cube, "down_back");
        return $hmap;
    }
}

?>