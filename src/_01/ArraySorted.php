<?php

declare(strict_types=1);

namespace App\_01;

class ArraySorted
{
    public static function phoneNumbers($phoneNumbers): array
    {
        $uniqNumbers = [];
        $prevNumber = null;
        foreach ($phoneNumbers as $phoneNumber) {
            if ($prevNumber === $phoneNumber) {
                $uniqNumbers[$prevNumber] += 1;
            } else {
                $uniqNumbers[$phoneNumber] = 1;
                $prevNumber = $phoneNumber;
            }
        }
        return $uniqNumbers;
    }

}