<?php

namespace Services\LetCode\Easy\ArrayType;

class RotateArray
{
    static function rotate($nums, $k) {
        $numsLength = count($nums);
        $k %= $numsLength;

        SELF::revert($nums, 0, $numsLength - 1);
        SELF::revert($nums, 0, $k - 1);
        SELF::revert($nums, $k, $numsLength - 1);

        for ($i = 0; $i <count($nums); $i++) {
            echo $nums[$i];
        }
    }
    
    static function revert(&$nums, $start, $end)
    {
        while ($end > $start) {
            $temp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $temp;
            $start++;
            $end--;
        }
    }
}

?>
