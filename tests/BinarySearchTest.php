<?php

namespace EresDev\Algorithms\Tests;

use function EresDev\Algorithms\binarySearch;


class BinarySearchTest extends AbstractTestCase
{
    /**
     * @dataProvider geSearchTestDataForNeedlePresence
     */
    public function testBinarySearchNeedlePresence(
        array $sortedArray,
        $needle,
        int $index
    ) : void {
        $this->assertEquals(
            $index,
            binarySearch($sortedArray, $needle)
        );
    }

    public function geSearchTestDataForNeedlePresence(): array
    {
        return [
            [
                [1,4,7,8,9], 7, 2
            ],
            [
                [2,1], 2, 0
            ],
            [
                ['a', 't', 'z'], 'z', 2
            ],
            [
                ['Q',  'c', 'z'], 'Q', 0
            ],
        ];
    }

    /**
     * @dataProvider geSearchTestDataForNeedleAbsence
     */
    public function testBinarySearchNeedleAbsence(array $sortedArray, $needle) : void
    {
        $this->assertEquals(
            -1,
            binarySearch($sortedArray, $needle)
        );
    }

    public function geSearchTestDataForNeedleAbsence(): array
    {
        return [
            [
                [1,4,7,8,9],2
            ],
            [
                [2,1], 5
            ],
            [
                ['a', 't', 'z'], 's'
            ],
            [
                ['Q',  'c', 'z'], 'V'
            ],
        ];
    }
}
