<?php

use Bootstrap\Controller;
use Services\LetCode\Easy\ArrayType\BestTimeToBuyAndSell;
use Services\LetCode\Easy\ArrayType\ContainsDuplicate;
use Services\LetCode\Easy\ArrayType\Intersection;
use Services\LetCode\Easy\ArrayType\MoveZeroes;
use Services\LetCode\Easy\ArrayType\RemoveDuplicate;
use Services\LetCode\Easy\ArrayType\RotateArray;
use Services\LetCode\Easy\ArrayType\SingleNumber;
use Services\LetCode\Easy\ArrayType\PlusOne;


class Home extends Controller
{
    function index() 
    {
        // Remove Duplicates from Sorted Array
        // $this->removeDuplicateFromArray();

        // Best Time to Buy and Sell Stock II
        // $this->bestProfit();

        // Rotate Array
        // $this->rotateArray();

        // Contains Duplicate
        // $this->containDuplicates();

        // Get single number in array
        // $this->getSingleNumber();

        // $this->intersection();

        // $this->plusOne();

        $this->moveZeros();
    }

    /**
     * Remove Duplicates from Sorted Array
     */
    function removeDuplicateFromArray()
    {
        $nums = [1,2,3,2,1,4,5];
        RemoveDuplicate::run($nums);
        return $this->view("index", ["nums" => $nums]);
    }

    /**
     * Best Time to Buy and Sell Stock II
     */
    function bestProfit() 
    {
        $prices = [7,1,5,3,6,4];
        echo BestTimeToBuyAndSell::run($prices);
    }

    /**
     * Rotate Array
     */
    function rotateArray() 
    {
        $nums = [1,2,3,4,5,6,7];

        RotateArray::rotate($nums, 3);
    }

    /**
     * Contains Duplicate
     */
    function containDuplicates() {
        $nums = [1,1,1,3,3,4,3,2,4,2];
        // $nums = [1,2,3,4];
        echo ContainsDuplicate::run($nums) == false ? "Not contain duplicateplicates" : "Contain duplicateplicates";
    }

    /**
     * Get single number from array
     */
    function getSingleNumber()
    {
        $nums = [4,1,2,1,2];
        echo SingleNumber::run($nums);
    }

    /**
     * Intersection of Two Arrays II
     */
    function intersection() 
    {
        $nums1 = [4,9,5];
        $nums2 = [9,4,9,8,4];
        $result = Intersection::run($nums1, $nums2);

        $this->printArray($result);
    }

    /**
     * Plus One
     */
    function plusOne() 
    {
        $nums = [9,9,9];
        PlusOne::run($nums);
        $this->printArray($nums);
    }

    function moveZeros()
    {
        $arr = [1, 9, 8, 4, 0, 0, 2, 7, 0, 6, 0, 9];
        MoveZeroes::run($arr);
        $this->printArray($arr);
    }


    /**
     * Print array
     */
    function printArray($result) 
    {
        foreach($result as $item) {
            echo $item . ", ";
        }
    }
}
?>