<?php

declare(strict_types=1);

namespace Unit\_03;

use App\_03\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    /**
     * @dataProvider getDataForHashString
     */
    public function testHashString($data, $expect): void
    {
        self::assertEquals($expect, Student::hashString($data));
    }
    /**
     * @dataProvider getDataForHashInt
     */
    public function testHashInt($data, $expect): void
    {
        self::assertEquals($expect, Student::hashInt($data));
    }
    /**
     * @dataProvider getDataForHashStudent
     */
    public function testStudent($age, $name, $expect): void
    {
        $student = new Student($age, $name);
        self::assertEquals($expect, $student->hashStudent());
    }

    public function getDataForHashString(): array
    {
        return [
            [
                'Vasya',
                516,
            ],
            [
                '1',
                49,
            ],
        ];
    }

    public function getDataForHashInt(): array
    {
        return [
            [
                102,
                0,
            ],
            [
                123,
                6,
            ],
        ];
    }

    public function getDataForHashStudent(): array
    {
        return [
            [
                102,
                'Vasya',
                516,
            ],
            [
                123,
                'Vasya',
                522,
            ],
        ];
    }
}
