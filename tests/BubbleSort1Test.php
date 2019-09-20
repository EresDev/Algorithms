<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\bubbleSort1;
use PHPUnit\Framework\TestCase;

class BubbleSort1Test extends TestCase
{
    public function testBubbleSort1MediumSizeArray() : void
    {
        $arr = [2,65,4,5,1,32,64,12];

        $sortedArray = bubbleSort1($arr);

        $this->assertEquals([1,2,4,5,12,32,64,65], $sortedArray);
    }

    public function testBubbleSort1WithRepeatedItems() : void
    {
        $arr = [99,11,2,3,6,99,99,1,2];

        $sortedArray = bubbleSort1($arr);

        $this->assertEquals([1,2,2,3,6,11,99,99,99], $sortedArray);
    }
}
