<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\bubbleSort1;

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
}
