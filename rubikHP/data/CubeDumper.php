<?php 

class CubeDumper {
    
    public function dump($cube, $filepath){
        try{
            $raw = json_encode($cube, JSON_PRETTY_PRINT);
            file_put_contents($filepath, $raw);
            return "success !";
        } catch(Exception $exc){
            die($exc->getMessage());
        }
    }

}

?>