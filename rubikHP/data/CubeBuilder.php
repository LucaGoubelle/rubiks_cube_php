<?php

require_once "Cube.php";

class CubeBuilder {

    private function buildFace(int $size, string $elem): array {
        $face = [];
        for($i = 0; $i < $size; $i++) {
            $row = [];
            for($j = 0; $j < $size; $j++){
                array_push($row, $elem);
            }
            array_push($face, $row);
        }
        return $face;
    }

    public function build(int $size){
        $back = $this->buildFace($size, "green");
        $up = $this->buildFace($size, "yellow");
        $front = $this->buildFace($size, "blue");
        $left = $this->buildFace($size, "orange");
        $right = $this->buildFace($size, "red");
        $down = $this->buildFace($size, "white");
        return new Cube($back, $up, $front, $left, $right, $down);
    }
}


?>