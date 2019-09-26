<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\quickSort;


class QuickSortTest extends AbstractTestCase
{
    /**
     * @dataProvider getArrays
     */
    public function testQuickSort($unsortedArray, $sortedArray) : void
    {
        $this->assertEquals(
            $sortedArray,
            quickSort($unsortedArray)
        );
    }
}
