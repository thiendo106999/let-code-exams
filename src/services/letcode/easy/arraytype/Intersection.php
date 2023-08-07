<?php

namespace Services\LetCode\Easy\ArrayType;

class Intersection 
{
    static function run($nums1, $nums2) 
    {
        $i = $j = $k = 0;
        $arrTemp = [];
        $lengthNum1 = count($nums1);
        $lengthNum2 = count($nums2);
        
        sort($nums1);
        sort($nums2);

        while ($i < $lengthNum1 && $j < $lengthNum2) {
            if ($nums1[$i] < $nums2[$j]) {
                $i++;
            } elseif ($nums1[$i] > $nums2[$j]) {
                $j++;
            } else {
                $arrTemp[$k++] = $nums1[$i++];
                $j++;
            }
        }

        return $arrTemp;
    }
}
?>