<?php

namespace Services\LetCode\Easy\ArrayType;

class ContainsDuplicate
{
    static function run($nums) 
    {
        $temp = [];
        foreach ($nums as $num) {
            if (array_key_exists($num, $temp)) {
                return true;
            } 
            $temp[$num] = $num;
        }
        return false;
    }
}
?>