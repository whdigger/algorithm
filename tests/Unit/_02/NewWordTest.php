<?php

declare(strict_types=1);

namespace Unit\_02;

use App\_02\ArrayList;
use App\_02\NewWord;
use PHPUnit\Framework\TestCase;

class NewWordTest extends TestCase
{
    /**
     * @dataProvider getDataForRandomSort
     */
    public function testRandomSort($data, $insertWord, $expect): void
    {
        $newWord = new NewWord($data);
        $newWord->insert($insertWord);
        self::assertEquals($expect, $newWord->getDictionary());
    }

    public function getDataForRandomSort(): array
    {
        return [
            [
                [
                    'Контент',
                    'Лутер',
                    'Тренд',
                    'Тренд',
                    'Фиксер',
                    'Фэшн',
                    'Хипстер',
                ],
                'Танк',
                [
                    'Контент',
                    'Лутер',
                    'Танк',
                    'Тренд',
                    'Тренд',
                    'Фиксер',
                    'Фэшн',
                    'Хипстер',
                ],
            ],
        ];
    }
}
