<?php

require_once "../scanners/Cube2x2Scanner.php";

class Corner2Seeker {
    private $scanner;

    public function __construct(){
        $this->scanner = new Cube2x2Scanner();
    }

    public function seekCorner($cube, $posibilities){
        $targetedOrient = "";
        $targetedColors = "";
        $corners = $this->scanner->scanCorners($cube);
        foreach($corners as $key => $val){
            if(in_array($val, $posibilities)){
                $targetedOrient = $key;
                $targetedColors = $val;
                break;
            }
        }
        return $targetedOrient."::".$targetedColors;
    }
}

?>