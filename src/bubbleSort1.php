<?php

/**
 * Algorithm Series by EresDev.com
 *
 * Algorithm Name:
 * Time Complexity:
 * Space Complexity:
 *
 * When to use:
 * When to not use:
 *
 * Extra Information:
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
