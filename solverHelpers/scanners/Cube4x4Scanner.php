<?php

require_once "Cube3x3Scanner.php";
require_once "rubikHP/data/Cube.php";

class Cube4x4Scanner extends Cube3x3Scanner {
    public function scanMicCenter(Cube $cube, string $orient, array $coord){
        $hmap = [
            "back" => $cube->back[$coord[0]][$coord[1]],
            "up" => $cube->up[$coord[0]][$coord[1]],
            "front" => $cube->front[$coord[0]][$coord[1]],
            "left" => $cube->left[$coord[0]][$coord[1]],
            "right" => $cube->right[$coord[0]][$coord[1]],
            "down" => $cube->down[$coord[0]][$coord[1]],
        ];
        return (array_key_exists($orient, $hmap)) ? $hmap[$orient] : "???";
    }

    public function scanMicEdge(Cube $cube, string $orient){
        $hmap = [
            "up_front:left" => "",
            "up_front:right" => "",
            "up_back:left" => "",
            "up_back:right" => "",
            "up_left:front" => "",
            "up_left:back" => "",
            "up_right:front" => "",
            "up_right:back" => "",

            "front_left:up"=>"",
            "front_left:down"=>"",
            "front_right:up"=>"",
            "front_right:down"=>"",
            "back_left:up"=>"",
            "back_left:down"=>"",
            "back_right:up"=>"",
            "back_right:down"=>"",

            "down_front:left" => "",
            "down_front:right" => "",
            "down_back:left" => "",
            "down_back:right" => "",
            "down_left:front" => "",
            "down_left:back" => "",
            "down_right:front" => "",
            "down_right:back" => "",
        ];
        return (array_key_exists($orient, $hmap)) ? $hmap[$orient] : "???";
    }
}

?>