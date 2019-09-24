<?php

namespace EresDev\Algorithms\Tests;

use PHPUnit\Framework\TestCase;

abstract class AbstractTestCase extends TestCase
{
    public function getArrays()
    {
        return [
            [
                [2,65,4,5,1,32,64,12],[1,2,4,5,12,32,64,65] // medium size array
            ],
            [
                [2,1], [1,2] // small size array
            ],
            [
                [2,65,4,5,1,32,64,12], [1,2,4,5,12,32,64,65] // already sorted medium size array
            ],
            [
                [99,11,2,3,6,99,99,1,2], [1,2,2,3,6,11,99,99,99] // with repeated items
            ],
            [
                [99,-11,2,3,6,-99,99,1,2], [-99,-11,1,2,2,3,6,99,99] // with negative numbers
            ],
            [
                [5,0,-1,2], [-1,0,2,5]  // with zero
            ],
            [
                ['c', 'a', 'z'], ['a', 'c', 'z']  // characters array
            ],
            [
                ['c', 'Q',  'a', 'z'], ['Q', 'a', 'c', 'z']  // characters array with capital letter
            ],
        ];
    }
}
