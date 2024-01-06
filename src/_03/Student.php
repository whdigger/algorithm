<?php

declare(strict_types=1);

namespace App\_03;

class Student
{
    public function __construct(private int $age, private string $name)
    {
    }

    public static function hashString(string $value): int
    {
        $hash = 0;
        $chars = mb_str_split($value);
        foreach ($chars as $char) {
            $hash += ord($char);
        }

        return $hash;
    }

    public static function hashInt(int $value): int
    {
        $hash = 1;
        while ($value > 0) {
            $hash *= $value % 10;
            $value = (int)($value / 10);
        }

        return $hash;
    }

    public function hashStudent(): int
    {
        return self::hashInt($this->age) + self::hashString($this->name);
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getName(): string
    {
        return $this->name;
    }
}