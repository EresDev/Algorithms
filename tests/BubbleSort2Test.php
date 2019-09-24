<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\bubbleSort2;

class BubbleSort2Test extends AbstractTestCase
{
    /**
     * @dataProvider getArrays
     */
    public function testBubbleSort2($unsortedArray, $sortedArray) : void
    {
        $this->assertEquals(
            $sortedArray,
            bubbleSort2($unsortedArray)
        );
    }
}
