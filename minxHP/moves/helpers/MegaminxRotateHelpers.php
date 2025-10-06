<?php

require_once "MinxRotateHelpers.php";

class MegaminxRotateHelpers extends MinxRotateHelpers {
    public function genEmptyFace(){
        $face = [];
        $row1 = [
            "","","","","",
            "","","","",""
        ];
        $row2 = [""];
        array_push($face, $row1);
        array_push($face, $row2);
        return $face;
    }

    public function rotate($face){
        $newFace = self::genEmptyFace();

        $newFace[0][0] = $face[0][8];
        $newFace[0][1] = $face[0][9];
        $newFace[0][2] = $face[0][0];
        $newFace[0][3] = $face[0][1];
        $newFace[0][4] = $face[0][2];
        $newFace[0][5] = $face[0][3];
        $newFace[0][6] = $face[0][4];
        $newFace[0][7] = $face[0][5];
        $newFace[0][8] = $face[0][6];
        $newFace[0][9] = $face[0][7];

        $newFace[1][0] = $face[1][0];

        return $newFace;
    }

    public function rotateAsync($face){
        $newFace = self::genEmptyFace();

        $newFace[0][0] = $face[0][2];
        $newFace[0][1] = $face[0][3];
        $newFace[0][2] = $face[0][4];
        $newFace[0][3] = $face[0][5];
        $newFace[0][4] = $face[0][6];
        $newFace[0][5] = $face[0][7];
        $newFace[0][6] = $face[0][8];
        $newFace[0][7] = $face[0][9];
        $newFace[0][8] = $face[0][0];
        $newFace[0][9] = $face[0][1];

        $newFace[1][0] = $face[1][0];

        return $newFace;
    }

    public function rotateTwice($face){
        for($i=0;$i<2;$i++)
            $face = self::rotate($face);
        return $face;
    }

    public function rotateTwiceAsync($face){
        for($i=0;$i<2;$i++)
            $face = self::rotateAsync($face);
        return $face;
    }

    public function rotateThree($face){
        for($i=0;$i<3;$i++)
            $face = self::rotate($face);
        return $face;
    }

    public function rotateThreeAsync($face){
        for($i=0;$i<3;$i++)
            $face = self::rotateAsync($face);
        return $face;
    }

    public function transfert($face, $newFace){
        for($i=0;$i<sizeof($face[0]);$i++)
            $face[0][$i] = ($newFace[0][$i]) ? $newFace[0][$i] : $face[0][$i];
        $face[1][0] = ($newFace[1][0]!="") ? $newFace[1][0] : $face[1][0];
        return $face;
    }
}

?>