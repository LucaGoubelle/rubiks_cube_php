<?php

require_once "solverHelpers/casters/centers/CentersCaster";

class Centers4x4Caster extends CentersCaster {

    public function __construct() {
        $this->size = 4;
    }

    protected function extractCenters($actualFace){
        return [
            [$actualFace[1][1], $actualFace[1][2]],
            [$actualFace[2][1], $actualFace[2][2]]
        ];
    }
}

?>