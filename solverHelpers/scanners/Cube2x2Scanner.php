<?php

require_once "rubikHP/data/Cube.php";

class Cube2x2Scanner {
    public function scanCorner(Cube $cube, string $orient): string {
        $last = count($cube->front) - 1;
        $hmap = [
            "up_front_left" => $cube->up[$last][0] ."_". $cube->front[0][0] ."_". $cube->left[0][$last],
            "up_front_right" => $cube->up[$last][$last] ."_". $cube->front[0][$last] ."_". $cube->right[0][0],
            "up_back_left" => $cube->up[0][0] ."_". $cube->back[0][$last] ."_". $cube->left[0][0],
            "up_back_right" => $cube->up[0][$last] ."_". $cube->back[0][0] ."_". $cube->right[0][$last],

            "down_front_left" => $cube->down[0][0]."_".$cube->front[$last][0]."_".$cube->left[$last][$last],
            "down_front_right" => $cube->down[0][$last]."_".$cube->front[$last][$last]."_".$cube->right[$last][0],
            "down_back_left" => $cube->down[$last][0]."_".$cube->back[$last][$last]."_".$cube->left[$last][0],
            "down_back_right" => $cube->down[$last][$last]."_".$cube->back[$last][0]."_".$cube->right[$last][$last]
        ];
        return (array_key_exists($orient, $hmap)) ? $hmap[$orient] : "???";
    }

    public function scanCorners(Cube $cube){
        $hmap = [];
        $hmap["up_front_right"] = $this->scanCorner($cube, "up_front_right");
        $hmap["up_front_left"] = $this->scanCorner($cube, "up_front_left");
        $hmap["up_back_left"] = $this->scanCorner($cube, "up_back_left");
        $hmap["up_back_right"] = $this->scanCorner($cube, "up_back_right");
        
        $hmap["down_front_left"] = $this->scanCorner($cube, "down_front_left");
        $hmap["down_front_right"] = $this->scanCorner($cube, "down_front_right");
        $hmap["down_back_right"] = $this->scanCorner($cube, "down_back_right");
        $hmap["down_back_left"] = $this->scanCorner($cube, "down_back_left");
        return $hmap;
    }
}

?>