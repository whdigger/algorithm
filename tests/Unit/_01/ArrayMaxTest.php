<?php

declare(strict_types=1);

namespace Test\Unit\_01;

use App\_01\ArrayMax;
use PHPUnit\Framework\TestCase;

class ArrayMaxTest extends TestCase
{
    /**
     * @dataProvider getDataFindSmallestTransaction
     * @param $source
     * @param $expect
     * @return void
     */
    public function testFindSmallestTransaction($source, $expect): void
    {
        $actual = ArrayMax::findSmallestTransaction($source);
        self::assertEquals($expect, $actual);
    }

    public function getDataFindSmallestTransaction(): array
    {
        return [
            [[-1000, -100, -10, -1], -1],
            [[-1000], -1000],
            [[-1000, -100, -10, -1, -1], -1],
            [[-1000, -100, -10, -1, -1, 0], 0],
            [[-2 ** 32], -2 ** 32]
        ];
    }

    /**
     * @dataProvider getDataFindBestStudentMistakes
     * @param $source
     * @param $expect
     * @return void
     */
    public function testFindBestStudentMistakes($source, $expect): void
    {
        $actual = ArrayMax::findBestStudentMistakes($source);
        self::assertEquals($expect, $actual);
    }

    public function getDataFindBestStudentMistakes(): array
    {
        return [
            [[9, 4, 1, 8, 7, 13, 6, 5], 1],
            [[1000], 1000],
            [[9, 4, 1, 8, 7, 13, 6, 5, 1, 1, 1, 1, 1], 1],
            [[9, 4, 1, 8, 7, 13, 6, 5, 0], 0],
            [[2 ** 32], 2 ** 32]
        ];
    }

    /**
     * @dataProvider getDataFindAverageTime
     * @param $source
     * @param $expect
     * @return void
     */
    public function testFindAverageTime($source, $expect): void
    {
        $actual = ArrayMax::findAverageTime($source);
        self::assertEquals($expect, $actual);
    }

    public function getDataFindAverageTime(): array
    {
        return [
            [[9999], 9999],
            [[9, 4, 1, 8, 7, 9, 4, 1, 8, 7, 8, 7, 18, 3, 13, 6, 5], 6.94],
            [[2 ** 32, 2 ** 32, 2 ** 32, 2 ** 32, 2 ** 32], 2 ** 32]
        ];
    }

    /**
     * @dataProvider getDataFindMostProfitableClient
     * @param $source
     * @param $expect
     * @return void
     */
    public function testFindMostProfitableClient($source, $expect): void
    {
        $actual = ArrayMax::findMostProfitableClient($source);
        self::assertEquals($expect, $actual);
    }

    public function getDataFindMostProfitableClient(): array
    {
        return [
            [
                [
                    [11, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                    [12, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                    [13, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                    [14, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                    [15, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                    [16, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                    [17, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                    [18, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                    [19, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                    [10, 2, 3, 4, 5, 6, 7, 8, 9, 0]
                ],
                8,
            ],
            [
                [
                    [1, 2 ** 32, -2 ** 32],
                    [1, 2, 3],
                ],
                1
            ],
            [
                [
                    [1, 9999, -10],
                    [1],
                ],
                0
            ], [
                [
                    [95, 67, 13, 55, 44, 11, 10],
                    [7, 190, 4, 44, 11, 1, 99],
                    [0, 5, -1, 500, 14, 90, 1],
                ],
                2
            ]
        ];
    }
}
