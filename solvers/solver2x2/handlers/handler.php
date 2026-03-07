<?php

require_once "rubikHP/moves/Mover.php";

class Handler {
    private $mover;

    public function __construct(){
        $this->mover = new Mover();
    }

}

?>