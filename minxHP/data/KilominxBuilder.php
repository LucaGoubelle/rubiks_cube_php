<?php

require_once "Minx.php";

class KilominxBuilder {
    
    private function buildFace($elem){
        $result = [$elem, $elem, $elem, $elem, $elem];
        return $result;
    }

    public function build(){
        $up = $this->buildFace("grey");
        $front = $this->buildFace("magenta");
        $left = $this->buildFace("lime");
        $right = $this->buildFace("beige");
        $downLeft = $this->buildFace("blue");
        $downRight = $this->buildFace("red");
        $absLeft = $this->buildFace("yellow");
        $absRight = $this->buildFace("green");
        $backLeft = $this->buildFace("orange");
        $backRight = $this->buildFace("cyan");
        $back = $this->buildFace("purple");
        $down = $this->buildFace("white");

        return new Minx(
            $up, $front, $left, $right, $downLeft, $downRight,
            $absLeft, $absRight, $backLeft, $backRight, $back, $down
        );
    }
}

?>