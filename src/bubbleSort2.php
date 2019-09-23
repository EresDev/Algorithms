<?php

/**
 * Algorithm Series by EresDev.com
 *
 * Algorithm Name: Bubble Sort -  Implementation 2
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
 * In PHP, array is passed by value copy
 * So, you either return sorted array
 * Or pass array as reference
 */

function bubbleSort2($arr) : array
{
    $arrLength = count($arr);

    do {
        $swapped = false;

        for ($index = 0; $index < $arrLength - 1; ++$index){

            if ($arr[$index] > $arr[$index + 1]) {

                $temp = $arr[$index];
                $arr[$index] = $arr[$index + 1];
                $arr[$index + 1] = $temp;

                $swapped = true;
            }

        }

    } while ($swapped);

    return $arr;
}
