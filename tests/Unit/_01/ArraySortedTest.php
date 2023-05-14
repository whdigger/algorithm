<?php

declare(strict_types=1);

namespace Unit\_01;

use App\_01\ArraySorted;
use PHPUnit\Framework\TestCase;

class ArraySortedTest extends TestCase
{
    /**
     * @dataProvider getDataPhoneNumbers
     * @param $word
     * @param $expected
     * @return void
     */
    public function testphoneNumbers($phoneNumbers, $expected): void
    {
        $actual = ArraySorted::phoneNumbers($phoneNumbers);
        self::assertEquals($actual, $expected);
    }

    public function getDataPhoneNumbers(): array
    {
        return [
            [
                [
                    79000000000,
                    79000000000,
                    79000000001,
                    79000000002,
                    79000000002,
                    79000000003,
                    79000000003,
                    79000000003,
                    79000000003,
                    79000000004,
                ],
                [
                    79000000000 => 2,
                    79000000001 => 1,
                    79000000002 => 2,
                    79000000003 => 4,
                    79000000004 => 1,
                ]
            ],
        ];
    }
}
