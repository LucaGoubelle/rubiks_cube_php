<?php

class Cube {
    public array $back;
    public array $up;
    public array $front;
    public array $left;
    public array $right;
    public array $down;

    public function __construct($b, $u, $f, $l, $r, $d) {
        $this->back = $b;
        $this->up = $u;
        $this->front = $f;
        $this->left = $l;
        $this->right = $r;
        $this->down = $d;
    }

    public function toArray(): array {
        return [
            "back" => $this->back,
            "up" => $this->up,
            "front" => $this->front,
            "left" => $this->left,
            "right" => $this->right,
            "down" => $this->down
        ];
    }
}

?>