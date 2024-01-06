<?php

declare(strict_types=1);

namespace Unit\_02;

use App\_02\ArrayList;
use PHPUnit\Framework\TestCase;

class ArrayListTest extends TestCase
{
    /**
     * @dataProvider getDataForRandomSort
     */
    public function testRandomSort($data, $expect): void
    {
        $textEditor = new ArrayList($data);
        $textEditor->randomSort();
        self::assertEquals($expect, $textEditor->randomSort());
    }

    public function getDataForRandomSort(): array
    {
        return [
            [
                [
                    1,
                    8,
                    4,
                    15,
                    3,
                ],
                [
                    1,
                    3,
                    4,
                    8,
                    15,
                ],
            ],
        ];
    }
}
