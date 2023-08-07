<?php

namespace Services\LetCode\Easy\ArrayType;

class PlusOne 
{
    static function run(&$num) {
        $numlength = count($num);
        for ($i = $numlength - 1; $i >= 0; $i--) {
            if ($num[$i] == 9) {
                $num[$i] = 0;
                if ($i == 0) {
                    array_unshift($num, 1);
                }
            } else {
                $num[$i] += 1;
                break;
            }
        }
    }
}

?>