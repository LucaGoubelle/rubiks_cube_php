<?php

class RotateHelpers {

    public function copyFace(array $face){
        return unserialize(serialize($face));
    }

    public function genEmptyFace(int $size): array {
        $face = [];
        for($i=0;$i<$size;$i++) {
            $row = [];
            for($j=0;$j<$size;$j++) 
                array_push($row, "");
            array_push($face, $row);
        }
        return $face;
    }

    public function rotate(array $face): array {
        $size = count($face);
        $newFace = self::genEmptyFace($size);
        for($i=0;$i<$size;$i++){
            $cnt = $size - 1;
            for($j=0;$j<$size;$j++){
                $newFace[$i][$j] = $face[$cnt][$i];
                $cnt--;
            }
        }
        return $newFace;
    }

    public function rotateAsync(array $face): array {
        for($i=0;$i<3;$i++)
            $face = self::rotate($face);
        return $face;
    }

    public function rotateTwice(array $face): array {
        for($i=0;$i<2;$i++)
            $face = self::rotate($face);
        return $face;
    }

    public function transfert(array $face, array $newFace): array {
        $size = count($face);
        for($i=0;$i<$size;$i++)
            for($j=0;$j<$size;$j++)
                $face[$i][$j] = ($newFace[$i][$j]!="") ? $newFace[$i][$j] : $face[$i][$j];
        return $face;
    }
}

?>