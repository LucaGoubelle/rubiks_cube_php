<?php

require_once "solverHelpers/CrownScanner.php";
require_once "solverHelpers/casters/CrownCaster.php";

class OLLScanner {
    private $scanner;
    private $caster;

    public function __construct(){
        $this->scanner = new CrownScanner();
        $this->caster = new CrownCaster();
    }

    public function scanOLL($cube) {
        $crown = $this->scanner->scanCrown($cube);
        $result = $this->caster->cast($crown);
        return $result;
    }
}

?>