<?php

require_once "Cube.php";

class CubeStrDumper {
    private $hmap;

    public function __construct(){
        $this->hmap = [
            "green" => "G",
            "blue" => "B",
            "red" => "R",
            "orange" => "O",
            "white" => "W",
            "yellow" => "Y",
        ];
    }

    private function dumpFace(array $face): string {
        $content = "";
        foreach($face as $row){
            foreach($row as $elem){
                $content .= (array_key_exists($elem, $this->hmap)) ? $this->hmap[$elem] : "?";
            }
        }
        return $content;
    }

    public function dump(Cube $cube): string {
        $content = "";
        $content .= $this->dumpFace($cube->back) . "_";
        $content .= $this->dumpFace($cube->up) . "_";
        $content .= $this->dumpFace($cube->front) . "_";
        $content .= $this->dumpFace($cube->left) . "_";
        $content .= $this->dumpFace($cube->right) . "_";
        $content .= $this->dumpFace($cube->down);
        return $content;
    }
}

?>