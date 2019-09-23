<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\bubbleSort2;
use PHPUnit\Framework\TestCase;

class BubbleSort2Test extends TestCase
{
    public function testBubbleSort2SmallSizeArray() : void
    {
        $arr = [2,1];

        $sortedArray = bubbleSort2($arr);

        $this->assertEquals([1,2], $sortedArray);
    }

    public function testBubbleSort2MediumSizeArray() : void
    {
        $arr = [2,65,4,5,1,32,64,12];

        $sortedArray = bubbleSort2($arr);

        $this->assertEquals([1,2,4,5,12,32,64,65], $sortedArray);
    }

    public function testBubbleSort2WithRepeatedItems() : void
    {
        $arr = [99,11,2,3,6,99,99,1,2];

        $sortedArray = bubbleSort2($arr);

        $this->assertEquals([1,2,2,3,6,11,99,99,99], $sortedArray);
    }
}
