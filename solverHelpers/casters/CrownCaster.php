<?php

class CrownCaster {
    public function cast($crown){
        $result = "";
        foreach($crown as $row){
            foreach($row as $elem)
                $result .= ($elem=="yellow") ? "1" : "0";
            $result .= "_"; 
        }
        return $result;
    }
}

?>