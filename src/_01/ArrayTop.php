<?php

declare(strict_types=1);

namespace App\_01;

class ArrayTop
{
    /**
     * @param array $inputArray
     * @param int $numberOfElement
     * @return array
     * @throws \Exception
     */
    public static function findTopElement(array $inputArray, int $numberOfElement): array
    {
        if ($numberOfElement > count($inputArray) | $numberOfElement <= 0) {
            throw new \Exception('No wrong params numberOfElement');
        }

        $topElements = [];
        $previousMax = PHP_INT_MAX;
        for ($i = 0; $i < $numberOfElement; $i++) {
            $currentMax = self::findMaxUnderBoundary($inputArray, $previousMax);
            $previousMax = $currentMax;
            $topElements[] = $currentMax;
        }
        return $topElements;
    }

    /**
     * @param array $inputArray
     * @param int $numberOfElement
     * @return array
     * @throws \Exception
     */
    public static function findBottomElement(array $inputArray, int $numberOfElement): array
    {
        if ($numberOfElement > count($inputArray) | $numberOfElement <= 0) {
            throw new \Exception('No wrong params numberOfElement');
        }

        $topElements = [];
        $previousMin = PHP_INT_MIN;
        for ($i = 0; $i < $numberOfElement; $i++) {
            $currentMin = self::findMinUnderBoundary($inputArray, $previousMin);
            $previousMin = $currentMin;
            $topElements[] = $currentMin;
        }
        return $topElements;
    }


    private static function findMaxUnderBoundary(array $inputArray, int $topBoundary)
    {
        $result = PHP_INT_MIN;
        foreach ($inputArray as $value) {
            if ($value <= $topBoundary) {
                $result = max($value, $result);
            }
        }
        return $result;
    }

    private static function findMinUnderBoundary(array $inputArray, int $topBoundary)
    {
        $result = PHP_INT_MAX;
        foreach ($inputArray as $value) {
            if ($value > $topBoundary) {
                $result = min($value, $result);
            }
        }
        return $result;
    }
}