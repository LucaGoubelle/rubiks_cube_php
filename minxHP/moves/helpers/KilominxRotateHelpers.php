<?php

require_once "MinxRotateHelpers.php";

class KilominxRotateHelpers extends MinxRotateHelpers {
    
    public static function genEmptyFace(){
        $face = ["","","","",""];
        return $face;
    }

    public static function rotate($face){
        $newFace = self::genEmptyFace();
        
        $newFace[0] = $face[4];
        $newFace[1] = $face[0];
        $newFace[2] = $face[1];
        $newFace[3] = $face[2];
        $newFace[4] = $face[3];

        return $newFace;
    }

    public static function rotateAsync($face){
        $newFace = self::genEmptyFace();
        
        $newFace[0] = $face[1];
        $newFace[1] = $face[2];
        $newFace[2] = $face[3];
        $newFace[3] = $face[4];
        $newFace[4] = $face[0];

        return $newFace;
    }

    public static function transfert($face, $newFace){
        for($i=0;$i<sizeof($face);$i++)
            $face[$i] = ($newFace[$i]!="") ? $newFace[$i] : $face[$i];
        return $face;
    }

}

?>