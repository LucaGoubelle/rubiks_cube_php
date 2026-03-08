<?php

class CubeLoader {
    
    public function load($filepath){
        try{
            $raw = file_get_contents($filepath);
            $json = json_decode($raw, true);
            return new Cube(
                $json["back"],
                $json["up"],
                $json["front"],
                $json["left"],
                $json["right"],
                $json["down"],
            );
        } catch(Exception $exc){
            die($exc->getMessage());
        }
    }

}

?>