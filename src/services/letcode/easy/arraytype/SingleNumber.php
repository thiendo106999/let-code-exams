<?php

namespace Services\LetCode\Easy\ArrayType;

// Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
// You must implement a solution with a linear runtime complexity and use only constant extra space.
class SingleNumber
{
    static function run($nums) 
    {
        $result = 0;
        foreach($nums as $num) {
            $result = $result ^ $num;
        }
        return $result;
    }
}

?>
