<?php

class CrownScanner {
    private function scanBackOfCrown($cube){
        $size = sizeof($cube->up);
        $row = [];
        for($i=$size-1;$i>=0;$i--)
            array_push($row, $cube->back[0][$i]);
        return $row;
    }

    private function scanFrontOfCrown($cube){
        $size = sizeof($cube->up);
        $row = [];
        for($i=0;$i<$size;$i++)
            array_push($row, $cube->front[0][$i]);
        return $row;
    }

    private function scanUpOfCrown($cube, $index){
        $last = sizeof($cube->up) - 1;
        $row = [];
        array_push($row, $cube->left[0][$index]);
        for($i=0;$i<$last+1;$i++)
            array_push($row, $cube->up[$index][$i]);
        array_push($row, $cube->right[0][$last-$index]);
        return $row;
    }

    public function scanCrown($cube){
        $result = [];
        array_push($result, $this->scanBackOfCrown($cube));
        for($i=0;$i<sizeof($cube->up);$i++)
            array_push($result, $this->scanUpOfCrown($cube, $i));
        array_push($result, $this->scanFrontOfCrown($cube));
        return $result;
    }
}

?>