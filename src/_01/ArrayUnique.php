<?php

declare(strict_types=1);

namespace App\_01;

class ArrayUnique
{
    public static function lettersLearnedToday($str): string
    {
        $uniqStr = '';
        for ($i = 0; $i < mb_strlen($str); $i++) {
            $find = false;
            for ($j = 0; $j < mb_strlen($uniqStr); $j++) {
                if (mb_substr($str, $i, 1) == mb_substr($uniqStr, $j, 1)) {
                    $find = true;
                    break;
                }
            }

            if (!$find) {
                $uniqStr .= mb_substr($str, $i, 1);
            }
        }
        return $uniqStr;
    }

    public static function avoidJailDueToTaxFraud($report): int
    {
        $repeatSum = -1;
        foreach ($report as $row) {
            foreach ($row as $sum) {
                foreach ($report as $rowRepeat) {
                    foreach ($rowRepeat as $sumRepeat) {
                        if ($sum == $sumRepeat) {
                            return $sum;
                        }
                    }
                }
            }
        }

        return $repeatSum;
    }
}