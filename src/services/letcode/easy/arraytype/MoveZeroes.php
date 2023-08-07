<?php

namespace Services\LetCode\Easy\ArrayType;

class MoveZeroes 
{
    static function run(&$nums) 
    {
        $snowBallSize = 0;
        for ($i = 0; $i < count($nums); $i++)
        {
            if ($nums[$i] == 0) {
                $snowBallSize++;
            } elseif ($snowBallSize > 0) {
                $temp = $nums[$i];
                $nums[$i] = 0;
                $nums[$i-$snowBallSize] = $temp;
            }
        }
    }

} 

?>