<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\bubbleSort1;
use function EresDev\Algorithms\bubbleSort1ByReference;

class BubbleSort1Test extends AbstractTestCase
{
    /**
     * @dataProvider getArrays
     */
    public function testBubbleSort1($unsortedArray, $sortedArray) : void
    {
        $this->assertEquals(
            $sortedArray,
            bubbleSort1($unsortedArray)
        );
    }

    /**
     * @dataProvider getArrays
     */
    public function testBubbleSort1ByReference($unsortedArray, $sortedArray) : void
    {
        bubbleSort1ByReference($unsortedArray);

        $this->assertEquals(
            $sortedArray,
            $unsortedArray
        );
    }
}
