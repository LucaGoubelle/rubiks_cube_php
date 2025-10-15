<?php

require_once "minxHP/data/KilominxBuilder.php";
require_once "minxHP/data/MegaminxBuilder.php";
require_once "minxHP/data/MasterKilominxBuilder.php";
require_once "minxHP/data/GigaminxBuilder.php";

class MinxBuilderFactory {
    private $hmap;
    
    public function __construct(){
        $this->hmap = [
            "kilominx" => new KilominxBuilder(),
            "megaminx" => new MegaminxBuilder(),
            "masterKilominx" => new MasteKilominxBuilder(),
            "gigaminx" => new GigaminxBuilder()
        ];
    }

    public function make(string $puzzleType) {
        return (array_key_exists($puzzleType, $this->hmap)) ? $this->hmap[$puzzleType]->build() : $this->hmap["megaminx"]->build();
    }
}

?>