<?php

declare(strict_types=1);

namespace Unit\_02;

use App\_02\BinarySearch;
use App\_02\DatingUser;
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    /**
     * @dataProvider getDataDoIKnowThisLanguage
     * @param $language
     * @param $search
     * @param $expect
     * @return void
     */
    public function testDoIKnowThisLanguage($language, $search, $expect): void
    {
        $actual = BinarySearch::doIKnowThisLanguage($language, $search);
        self::assertEquals($expect, $actual);
    }

    public function getDataDoIKnowThisLanguage(): array
    {
        return [
            [[
                'ADA',
                'ALGOL',
                'B',
                'BASIC',
                'C',
                'C++'
            ], 'C', true],
        ];
    }

    /**
     * @dataProvider getDataFindUsers
     * @param $usersSortedByIq
     * @param $lowerIqBound
     * @param $professorIq
     * @param $expect
     * @return void
     */
    public function testFindUsers($usersSortedByIq, $lowerIqBound, $professorIq, $expect): void
    {
        $actual = BinarySearch::findUsers($usersSortedByIq, $lowerIqBound, $professorIq);
        self::assertEquals($expect, $actual);
    }

    public function getDataFindUsers(): array
    {
        $usersSortedByIq = [
            new DatingUser(1, 'A'),
            new DatingUser(2, 'B'),
            new DatingUser(3, 'C'),
            new DatingUser(4, 'D'),
            new DatingUser(5, 'E'),
            new DatingUser(6, 'F'),
        ];

        return [
            [$usersSortedByIq, 1, 2,
                [
                    new DatingUser(1, 'A'),
                    new DatingUser(2, 'B'),
                ]
            ],
            [$usersSortedByIq, 4, 5,
                [
                    new DatingUser(4, 'D'),
                    new DatingUser(5, 'E'),
                ]
            ],
            [$usersSortedByIq, 5, 5,
                [
                    new DatingUser(5, 'E'),
                ]
            ],
        ];
    }

    /**
     * @dataProvider getDataFindPhoneNumber
     * @param $sortedPhoneNumbers
     * @param $search
     * @param $expect
     * @return void
     */
    public function testFindPhoneNumber($sortedPhoneNumbers, $search, $expect): void
    {
        $actual = BinarySearch::findPhoneNumber($sortedPhoneNumbers, $search);
        self::assertEquals($expect, $actual);
    }

    public function getDataFindPhoneNumber(): array
    {
        return [
            [[
                1,
                2,
                3,
                4,
                5
            ], 2, 1],
            [[
                5,
                4,
                3,
                2,
                1
            ], 2, 3],
        ];
    }
}
