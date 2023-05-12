<?php

declare(strict_types=1);

namespace App\_01;

class ArrayTop
{
    public static function findTopElement(array $inputArray, int $numberOfElement): array
    {
        $topElements = [];
        $previosMax = PHP_INT_MAX;
        for ($i = 0; $i < $numberOfElement; $i++) {
            $currentMax = self::findMaxUnderBoundary($inputArray, $previosMax);
            $previosMax = $currentMax;
            $topElements[] = $currentMax;
        }
        return $topElements;
    }

    private static function findMaxUnderBoundary(array $inputArray, int $topBoundary)
    {
        $result = PHP_INT_MIN;
        foreach ($inputArray as $value) {
            if ($value < $topBoundary) {
                $result = max($value, $result);
            }
        }
        return $result;
    }
}