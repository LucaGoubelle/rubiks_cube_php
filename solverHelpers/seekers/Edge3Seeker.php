<?php

require_once "../scanners/Cube3x3Scanner.php";

class Edge3Seeker {
    private $scanner;

    public function __construct(){
        $this->scanner = new Cube3x3Scanner();
    }

    public function seekEdge($cube, $colors1, $colors2){
        $targetedOrient = "";
        $targetedColor = "";
        $edges = $this->scanner->scanEdges($cube);
        foreach($edges as $key => $val){
            if($val == $colors1 OR $val == $colors2){
                $targetedOrient = $key;
                $targetedColor = $val;
                break;
            }
        }
        return $targetedOrient . "::" . $targetedColor;
    }
}

?>