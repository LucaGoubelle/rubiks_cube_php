<?php

require_once "../scanners/Cube3x3Scanner.php";

class Corner3Seeker {
    private $scanner;

    public function __construct(){
        $this->scanner = new Cube3x3Scanner();
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