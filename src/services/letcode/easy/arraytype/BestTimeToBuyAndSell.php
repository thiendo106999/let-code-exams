<?php

namespace Services\LetCode\Easy\ArrayType;

class BestTimeToBuyAndSell 
{
    static function run($prices) 
    {
        $profit = 0;
        $lenght = count($prices);

        for ($i = 1; $i < $lenght; $i++) {
            if ($prices[$i] > $prices[$i - 1]) {
                $profit += $prices[$i] - $prices[$i - 1];
            }
        }

        return $profit;
    }
}

?>