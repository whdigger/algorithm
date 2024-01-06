<?php

declare(strict_types=1);

namespace Unit\_03;

use _03\VeryDynamicArray;
use PHPUnit\Framework\TestCase;

class VeryDynamicArrayTest extends TestCase
{
    /**
     * @dataProvider getDataForVeryDynamicArray
     */
    public function testHashString($data, $expect): void
    {
        $veryDynamicArray = new VeryDynamicArray();
        foreach ($data as $item) {
            $veryDynamicArray->add($item[0], $item[1]);
        }

        self::assertEquals($expect, $veryDynamicArray->hashString($data));
    }

    public function getDataForVeryDynamicArray(): array
    {
        return [
            [
                ['Vasya', '516'],
                ['Pety', '123']
            ],
            [
                '1',
                49,
            ],
        ];
    }
}
