<?php

class Processor {
    private $data;

    public function __construct(){
        $this->data = [];
    }

    public function process($input_data){
        return (array_key_exists($input_data, $this->data)) ? $this->data[$input_data] : "???"; 
    }

}

?>