<?php

class ColorDetector {

    public function detectColorOnFace(array $face, string $color): array {
        $size = count($face);
        $result = [];
        for($i = 0; $i < $size; $i++) {
            $row = [];
            for($j = 0; $j < $size; $j++) {
                $atomicResult = ($face[$i][$j]==$color) ? 1 : 0 ;
                array_push($row, $atomicResult);
            }
            array_push($result, $row);
        }
        return $result;
    }

    public function detectColorsOnEdge(string $edge, array $colors): bool {
        $results = explode('_', $edge);
        $test1 = in_array($colors[0], results);
        $test2 = in_array($colors[1], results);
        return $test1 && $test2;
    }

    public function detectColorsOnCorner(string $corner, array $colors): bool {
        $results = explode('_', $corner);
        $test1 = in_array($colors[0], results);
        $test2 = in_array($colors[1], results);
        $test3 = in_array($colors[2], results);
        return $test1 && $test2 && $test3;
    }
}

?>