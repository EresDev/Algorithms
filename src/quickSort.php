<?php

/**
 * Algorithm Series by EresDev.com
 *
 * Algorithm Name: Quick Sort
 * Time Complexity: average case O(n log(n)) and worst case O(n^2)
 * Space Complexity: O(log n)
 *
 * When to use: This is official sorting algorithm in programming languages like PHP, C#.
 *              That makes it one of the most preferred sorting algorithms.
 *
 * Extra Information: A quick video to show you how it work https://www.youtube.com/watch?v=Hoixgm4-P4M
 *
 */

namespace EresDev\Algorithms;

/**
 * In PHP, array is passed by value copy
 * So, you either return sorted array
 * Or pass array as reference
 */

function quickSort(array $arr) : array
{
    $low = 0;
    $high = count($arr) - 1;

    doSort($arr, $low, $high);

    return $arr;
}

function doSort(&$arr, int $left, int $right) : void
{
    $pivotLocation = partition($arr, $left, $right);

    if ($left < $pivotLocation - 1) { // sort left half
        doSort($arr, $left, $pivotLocation-1);

    }

    if ($pivotLocation < $right) { // sort right half
        doSort($arr, $pivotLocation, $right);
    }
}

function partition(&$arr, $left, $right) : int
{
    $pivot = $arr[ ($left + $right) / 2 ];

    while ($left <= $right) {

        while($arr[$left] < $pivot) ++$left; // find element on left that should on right

        while($arr[$right] > $pivot) --$right; // find element on right that should be on left

        if ($left <= $right) {
            $temp = $arr[$left];
            $arr[$left] = $arr[$right];
            $arr[$right] = $temp;

            ++$left;
            --$right;
        }
    }

    return $left;
}
