<?php

/**
 * Algorithm Series by EresDev.com
 *
 * Algorithm Name: Selection Sort
 * Time Complexity: O(n^2)
 * Space Complexity: O(1)
 *
 * When to use: preferred when memory writes are more expensive than reads, as it makes only O(n) writes
 *
 * Extra Information: A quick video to show you how it work https://www.youtube.com/watch?v=g-PGLbMth_g
 *
 */

namespace EresDev\Algorithms;

/**
 * In PHP, array is passed by value copy
 * So, you either return sorted array
 * Or pass array as reference
 */

function selectionSort($arr) : array
{
    $arrLength = count($arr);

    for($i = 0; $i < $arrLength; ++$i) {

        for($j = $i+1; $j < $arrLength; ++$j) {

            if($arr[$j] < $arr[$i]) {

                $min = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $min;

            }
        }

    }
    return $arr;
}
