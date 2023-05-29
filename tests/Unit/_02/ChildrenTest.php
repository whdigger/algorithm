<?php

declare(strict_types=1);

namespace Unit\_02;

use _02\Children;
use PHPUnit\Framework\TestCase;

class ChildrenTest extends TestCase
{
    /**
     * @dataProvider getDataBackspace
     * @param $words
     * @param $expect
     * @return void
     */
    public function testPermutateWords($words, $expect): void
    {
        $textEditor = new Children($words);
        $textEditor->permutateWords();
        self::assertEquals($expect, $textEditor->getWords());
    }

    public function getDataBackspace(): array
    {
        return [
            [
                [
                    'шбака',
                    'катeнк',
                    'гусък',
                    'бакаш',
                    'шбака',
                ],
                [
                    'акашб',
                    'катeнк',
                    'гусък',
                    'бакаш',
                    'шбака',
                ]
            ],
        ];
    }
}
