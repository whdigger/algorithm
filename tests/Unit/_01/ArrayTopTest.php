<?php

declare(strict_types=1);

namespace Unit\_01;

use App\_01\ArrayTop;
use PHPUnit\Framework\TestCase;

class ArrayTopTest extends TestCase
{
    /**
     * @dataProvider getDataFindTopElement
     * @param $source
     * @param $numberOfElement
     * @return void
     * @throws \Exception
     */
    public function testFindTopElement($source, $numberOfElement): void
    {
        $this->expectException(\Exception::class);
        ArrayTop::findTopElement($source, $numberOfElement);
    }

    public function getDataFindTopElement(): array
    {
        return [
            [[10, 20, 30, 40], -1],
        ];
    }

    /**
     * @dataProvider getDataFindBottomElement
     * @param $source
     * @param $numberOfElement
     * @param $expect
     * @return void
     * @throws \Exception
     */
    public function testFindBottomElement($source, $numberOfElement, $expect): void
    {
        $actual = ArrayTop::findBottomElement($source, $numberOfElement);
        self::assertEquals($expect, $actual);
    }

    public function getDataFindBottomElement(): array
    {
        return [
            [[40, 50, 60, 10, 20, 30, 70, 80], 3, [10, 20, 30]],
        ];
    }

    /**
     * @dataProvider getDataFindTopElementWithRepeating
     * @param $source
     * @param $numberOfElement
     * @param $expect
     * @return void
     * @throws \Exception
     */
    public function testFindTopElementWithRepeating($source, $numberOfElement, $expect): void
    {
        $actual = ArrayTop::findTopElement($source, $numberOfElement);
        self::assertEquals($expect, $actual);
    }

    public function getDataFindTopElementWithRepeating(): array
    {
        return [
            [[100, 100, 100, 55, 8], 3, [100, 100, 100]],
            [[100, 100, 100, 55, 8], 2, [100, 100]],
            [[100, 55, 8, 100, 100], 4, [100, 100, 100, 55]],
            [[0, 0, 0, 0], 4, [0, 0, 0, 0]],
        ];
    }
}
