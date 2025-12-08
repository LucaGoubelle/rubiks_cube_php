<?php

require_once "solverHelpers/casters/centers/CentersCaster";

class Centers7x7Caster extends CentersCaster {

    public function __construct() {
        $this->size = 7;
    }

    protected function extractCenters($actualFace){
        return [
            [$actualFace[1][1], $actualFace[1][2], $actualFace[1][3], $actualFace[1][4], $actualFace[1][5]],
            [$actualFace[2][1], $actualFace[2][2], $actualFace[2][3], $actualFace[2][4], $actualFace[2][5]],
            [$actualFace[3][1], $actualFace[3][2], $actualFace[3][3], $actualFace[3][4], $actualFace[3][5]],
            [$actualFace[4][1], $actualFace[4][2], $actualFace[4][3], $actualFace[4][4], $actualFace[4][5]],
            [$actualFace[5][1], $actualFace[5][2], $actualFace[5][3], $actualFace[5][4], $actualFace[5][5]]
        ];
    }
}

?>