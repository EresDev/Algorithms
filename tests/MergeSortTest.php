<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\mergeSort;


class MergeSortTest extends AbstractTestCase
{
    /**
     * @dataProvider getArrays
     */
    public function testMergeSort($unsortedArray, $sortedArray) : void
    {
        $this->assertEquals(
            $sortedArray,
            mergeSort($unsortedArray)
        );
    }
}
