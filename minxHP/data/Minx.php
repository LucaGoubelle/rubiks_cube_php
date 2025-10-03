<?php

class Minx {
    public $up;
    public $front;
    public $left;
    public $right;
    public $downLeft;
    public $downRight;
    public $absLeft;
    public $absRight; 
    public $backLeft;
    public $backRight;
    public $back;
    public $down;

    public function __construct(
        $up, $front, $left, $right, $downLeft, $downRight,
        $absLeft, $absRight, $backLeft, $backRight, $back, $down
    ){
        $this->up = $up;
        $this->front = $front;
        $this->left = $left;
        $this->right = $right;
        $this->downLeft = $downLeft;
        $this->downRight = $downRight;
        $this->absLeft = $absLeft;
        $this->absRight = $absRight;
        $this->backLeft = $backLeft;
        $this->backRight = $backRight;
        $this->back = $back;
        $this->down = $down;
    }
}

?>