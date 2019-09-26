<?php

/**
 * Algorithm Series by EresDev.com
 *
 * Algorithm Name: Merge Sort
 * Time Complexity: O(n log(n))
 * Space Complexity: O(n)
 *
 * When to use: It is preferred algorithm after Quick Sort. Merge sort guarantees O(n log n).
 *              While Quicksort is average case O(n log n), but has a worst case of O(n^2).
 * More: https://stackoverflow.com/questions/29218440/when-merge-sort-is-preferred-over-quick-sort
 *
 * Extra Information: A quick video to show you how it work https://www.youtube.com/watch?v=4VqmGXwpLqc
 *
 */

namespace EresDev\Algorithms;

/**
 * In PHP, array is passed by value copy
 * So, you either return sorted array
 * Or pass array as reference
 */

function mergeSort(array $arr) : array
{
    $helper = [];
    $low = 0;
    $high = count($arr)-1;
    divideAndMerge($arr, $helper, $low, $high);

    return $arr;
}

function divideAndMerge(array &$arr, array &$helper, int $low, int $high) : void
{
    if ($low < $high) {
        $middle = ($low + $high) / 2;
        divideAndMerge($arr, $helper, $low, $middle);
        divideAndMerge($arr, $helper, $middle+1, $high);
        merge($arr, $helper, $low, $middle, $high);
    }
}

function merge(array &$arr, array &$helper, int $low, int $middle, int $high) : void
{
    //fill up helper array
    foreach ($arr as $index => $element) {
        $helper[$index] = $element;
    }

    $helperLeft = $low;
    $helperRight = $middle+1;
    $current = $low;

    while ($helperLeft <= $middle && $helperRight <= $high) {
        if ($helper[$helperLeft] <= $helper[$helperRight]) {
            $arr[$current] = $helper[$helperLeft];
            ++$helperLeft;
        } else {
            $arr[$current] = $helper[$helperRight];
            ++$helperRight;
        }

        ++$current;
    }

    // copy the rest of the elements of left side into the array
    // Right side doesn't need to copied because it is already there
    // when we copied $arr to $helper

    $remaining = $middle - $helperLeft;
    for ($i = 0; $i <= $remaining; ++$i) {
        $arr[$current + $i] = $helper[$helperLeft + $i];
    }

}
