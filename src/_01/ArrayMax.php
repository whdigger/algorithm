<?php

declare(strict_types=1);

namespace App\_01;

class ArrayMax
{
    public static function findSmallestTransaction(array $transactions): int
    {
        if (count($transactions) == 0) {
            return -1;
        }

        $min = $transactions[0];
        foreach ($transactions as $transaction) {
            $min = max($transaction, $min);
        }
        return $min;
    }

    public static function findBestStudentMistakes(array $students): int
    {
        if (count($students) == 0) {
            return -1;
        }

        $max = $students[0];
        foreach ($students as $student) {
            $max = min($student, $max);
        }
        return $max;
    }

    public static function findAverageTime(array $times): float
    {
        $result = 0;
        foreach ($times as $time) {
            $result += $time;
        }

        return round($result / count($times), 2);
    }

    public static function findMostProfitableClient(array $incomes): int
    {
        $prevSum = PHP_INT_MIN;
        $resultIndex = 0;
        foreach ($incomes as $index => $income) {
            $sum = 0;
            foreach ($income as $amount) {
                $sum += $amount;
            }
            $currentSum = max($sum, $prevSum);
            if ($currentSum > $prevSum) {
                $resultIndex = $index;
                $prevSum = $currentSum;
            }
        }
        return $resultIndex;
    }
}
