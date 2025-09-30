<?php

require_once "rubikHP/display/AnsiColor.php";
require_once "rubikHP/data/Cube.php";

class CubePrinter {
    private $hmap;

    public function __construct() {
        $this->hmap = [
            "yellow" => AnsiColors::$yellow,
            "blue" => AnsiColors::$blue,
            "white" => AnsiColors::$white,
            "red" => AnsiColors::$red,
            "orange" => AnsiColors::$magenta,
            "green" => AnsiColors::$green
        ];
    }

    public function print(Cube $cube): void {
        $content = "";
        foreach($cube->up as $row) $content .= $this->rowUpDown($row);
        for($i = 0; $i<count($cube->front); $i++) $content .= $this->rowLFRB(
            $cube->left[$i], 
            $cube->front[$i], 
            $cube->right[$i], 
            $cube->back[$i]
        );
        foreach($cube->down as $row) $content .= $this->rowUpDown($row);
        $content .= "\n";
        echo $content;
    }

    private function rowUpDown(array $row): string {
        $content = "";
        for($i = 0; $i < count($row); $i++) $content .= " ";
        foreach($row as $element) $content .= $this->hmap[$element];
        $content .= "\n";
        return $content;
    }

    private function rowLFRB(array $rowL, array $rowF, array $rowR, array $rowB): string {
        $content = "";
        foreach($rowL as $element) $content .= $this->hmap[$element];
        foreach($rowF as $element) $content .= $this->hmap[$element];
        foreach($rowR as $element) $content .= $this->hmap[$element];
        foreach($rowB as $element) $content .= $this->hmap[$element];
        $content .= "\n";
        return $content;
    }
}

?>