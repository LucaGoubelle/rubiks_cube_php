<?php

class PLLScanner {
    private $hmap;

    public function __construct(){
        $this->hmap = [
            "blue" => "B",
            "red" => "R",
            "orange" => "O",
            "green" => "G"
        ];
    }

    public function scanPLL($cube){
        $result = "";
        foreach($cube->front[0] as $elem)
            $result .= $this->hmap[$elem];
        $result .= "_";
        foreach($cube->right[0] as $elem)
            $result .= $this->hmap[$elem];
        $result .= "_";
        foreach($cube->back[0] as $elem)
            $result .= $this->hmap[$elem];
        $result .= "_";
        foreach($cube->left[0] as $elem)
            $result .= $this->hmap[$elem];
        return $result;
    }
}

?>