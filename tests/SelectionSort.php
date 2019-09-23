<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\selectionSort;
use PHPUnit\Framework\TestCase;

class SelectionSort1Test extends TestCase
{
    public function testSelectionSortSmallSizeArray() : void
    {
        $arr = [2,1];

        $sortedArray = selectionSort($arr);

        $this->assertEquals([1,2], $sortedArray);
    }

    public function testSelectionSortMediumSizeArray() : void
    {
        $arr = [2,65,4,5,1,32,64,12];

        $sortedArray = selectionSort($arr);

        $this->assertEquals([1,2,4,5,12,32,64,65], $sortedArray);
    }

    public function testSelectionSortWithRepeatedItems() : void
    {
        $arr = [99,11,2,3,6,99,99,1,2];

        $sortedArray = selectionSort($arr);

        $this->assertEquals([1,2,2,3,6,11,99,99,99], $sortedArray);
    }

    public function testSelectionSortWithNegativeNumbers() : void
    {
        $arr = [99,-11,2,3,6,-99,99,1,2];

        $sortedArray = selectionSort($arr);

        $this->assertEquals([-99,-11,1,2,2,3,6,99,99], $sortedArray);
    }

    public function testSelectionSortWithZero() : void
    {
        $arr = [5,0,-1,2];

        $sortedArray = selectionSort($arr);

        $this->assertEquals([-1,0,2,5], $sortedArray);
    }
}
