<?php

/**
 * Algorithm Series by EresDev.com
 *
 * Algorithm Name: Bubble Sort -  Implementation 1
 * Time Complexity: O(n^2)
 * Space Complexity: O(1)
 *
 * When to use: Almost never
 * When to not use: Almost always
 *
 * Extra Information: A quick video to show you how it work https://www.youtube.com/watch?v=xli_FI7CuzA
 *
 */

namespace EresDev\Algorithms;

/**
 * In PHP, array is passed by copy
 * So, you either return sorted array
 * Or pass array as reference
 */

function bubbleSort1($arr) : array
{
    $arrLength = count($arr);

    for ($i = $arrLength - 1; $i > 0; $i--) {

        for ($j = 0; $j < $i; $j++) {
    
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
    
        }
		
    }

    return $arr;
}

/**
 * Same algorithm with array reference
 */
function bubbleSort1ByReference(&$arr) : void
{
    $arrLength = count($arr);

    for ($i = $arrLength - 1; $i > 0; $i--) {

        for ($j = 0; $j < $i; $j++) {

            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }

        }

    }
}
