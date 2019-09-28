<?php

/**
 * Algorithm Series by EresDev.com
 *
 * Algorithm Name: Binary Search
 * Time Complexity: Worst case  and average case O(log n), best case O(1)
 * Space Complexity: O(1) for iterative implementation
 *
 */

namespace EresDev\Algorithms;

/**
 * There are both recursive and iterative implementations
 * of Binary Search. I always prefer iterative implementation over
 * recursive because of the fact of mental mapping. Iterative is always
 * more readable and easy to understand.
 */

function binarySearch(array $sortedArray, $needle) : int
{
    $low = 0;
    $high = count($sortedArray) - 1;

    while ($low <= $high) {
        $middle = ($low + $high) / 2;

        if ($sortedArray[$middle] < $needle) {
            $low = $middle + 1;
        } else if ($sortedArray[$middle] > $needle) {
            $high = $middle - 1;
        } else {
            return $middle;
        }
    }

    return -1; // Unable to find needle
}
