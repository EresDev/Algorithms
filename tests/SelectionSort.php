<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\selectionSort;


class SelectionSortTest extends AbstractTestCase
{
    /**
     * @dataProvider getArrays
     */
    public function testSelectionSort($unsortedArray, $sortedArray) : void
    {
        $this->assertEquals(
            $sortedArray,
            selectionSort($unsortedArray)
        );
    }
}
