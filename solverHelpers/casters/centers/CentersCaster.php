<?php

class CentersCaster {
    protected $size;
    
    public function __construct(){
        $this->size = 0;
    }

    protected function getActualFace($cube, string $face): array {
        switch($face){
            case "up": return $cube->up;
            case "front": return $cube->front;
            case "left": return $cube->left;
            case "right": return $cube->right;
            case "down": return $cube->down;
            case "back": return $cube->back;
            default: return $cube->front;
        }
    }

    protected function getStringCenters(string $colorToFilter, array $centers): string {
        $content = "";
        foreach($centers as $row)
            foreach($row as $elem)
                $content .= ($elem == $colorToFilter) ? "1" : "0";
        return $content;
    }

    protected function extractCenters($actualFace){
        return [];
    }

    public function cast($cube, $face, $colorToFilter){
        if(sizeof($cube->front) != $this->size)
            throw new Exception("Cube must be a $this->size x $this->size to use CenterCaster class");
        $actualFace = $this->getActualFace($cube, $face);
        $actualCenters = $this->extractCenters($actualFace);
        return $this->getStringCenters($colorToFilter, $actualCenters);
    }
}

?>