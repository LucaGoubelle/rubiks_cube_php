<?php

require_once "solverHelpers/casters/centers/CentersCaster";

class Centers5x5Caster extends CentersCaster {

    public function __construct() {
        $this->size = 5;
    }

    protected function extractCenters($actualFace){
        return [
            [$actualFace[1][1], $actualFace[1][2], $actualFace[1][3]],
            [$actualFace[2][1], $actualFace[2][2], $actualFace[2][3]],
            [$actualFace[3][1], $actualFace[3][2], $actualFace[3][3]]
        ];
    }
}

?>