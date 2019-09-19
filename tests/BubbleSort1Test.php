<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\bubbleSort1;
use PHPUnit\Framework\TestCase;

class BubbleSort1Test extends TestCase
{
    public function testBubbleSort1() : void
    {
        $arr = [2,65,4,5,1,32,64,12];

        $sortedArray = bubbleSort1($arr);

        $this->assertEquals([1,2,4,5,12,32,64,65], $sortedArray);
    }
}
