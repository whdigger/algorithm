<?php

declare(strict_types=1);

namespace Unit\_01;

use App\_01\ArrayUnique;
use PHPUnit\Framework\TestCase;

class ArrayUniqueTest extends TestCase
{
    /**
     * @dataProvider getDataLettersLearnedToday
     * @param $word
     * @param $expected
     * @return void
     */
    public function testLettersLearnedToday($word, $expected): void
    {
        $actual = ArrayUnique::lettersLearnedToday($word);
        self::assertEquals($actual, $expected);
    }

    public function getDataLettersLearnedToday(): array
    {
        return [
            ['АААФФФФФФФЖЫЫЫЫБЫРВАААААЛГГГХЫХЫБЛИА', 'АФЖЫБРВЛГХИ'],
            ['ОК', 'ОК'],
            ['СКИЛЛБОКСТОПЧИК', 'СКИЛБОТПЧ'],
            ['ААААААААА', 'А'],
        ];
    }

    /**
     * @dataProvider getDataAvoidJailDueToTaxFraud
     * @param $word
     * @param $expected
     * @return void
     */
    public function testAvoidJailDueToTaxFraud($report, $expected): void
    {
        $actual = ArrayUnique::avoidJailDueToTaxFraud($report);
        self::assertEquals($actual, $expected);
    }

    public function getDataAvoidJailDueToTaxFraud(): array
    {
        return [
            [
                [
                    [12391203, 3828382, 334934939],
                    [45345345, 5341312, 55345345],
                    [334934939, 1234122, 657657],
                ],
                334934939
            ],
            [
                [
                    [1, 1, 1],
                    [1, 1, 1]
                ],
                1
            ],
            [
                [
                    [1, 2, 3],
                    [4, 5, 6],
                ],
                -1
            ],
        ];
    }
}
