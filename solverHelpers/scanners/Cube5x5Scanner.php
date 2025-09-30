<?php

require_once "Cube4x4Scanner.php";
require_once "rubikHP/data/Cube.php";

class Cube5x5Scanner extends Cube4x4Scanner {
    public function scanMicEdge(Cube $cube, string $orient){
        $hmap = [
            "up_front:left" => "",
            "up_front:right" => "",
            "up_front" => "",
            "up_back:left" => "",
            "up_back:right" => "",
            "up_back" => "",
            "up_left:front" => "",
            "up_left:back" => "",
            "up_left" => "",
            "up_right:front" => "",
            "up_right:back" => "",
            "up_right" => "",

            "front_left:up"=>"",
            "front_left:down"=>"",
            "front_left"=>"",
            "front_right:up"=>"",
            "front_right:down"=>"",
            "front_right"=>"",
            "back_left:up"=>"",
            "back_left:down"=>"",
            "back_left"=>"",
            "back_right:up"=>"",
            "back_right:down"=>"",
            "back_right"=>"",

            "down_front:left" => "",
            "down_front:right" => "",
            "down_front" => "",
            "down_back:left" => "",
            "down_back:right" => "",
            "down_back" => "",
            "down_left:front" => "",
            "down_left:back" => "",
            "down_left" => "",
            "down_right:front" => "",
            "down_right:back" => "",
            "down_right" => "",
        ];
        return (array_key_exists($orient, $hmap)) ? $hmap[$orient] : "???";
    }
}

?>