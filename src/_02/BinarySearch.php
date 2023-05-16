<?php

declare(strict_types=1);

namespace App\_02;

class BinarySearch
{
    public static function doIKnowThisLanguage(array $languages, string $search): bool
    {
        $left = 0;
        $right = count($languages) - 1;
        $find = false;
        while ($left <= $right) {
            $mid = (int)(($right + $left) / 2);
            if ($languages[$mid] < $search) {
                $left = $mid + 1;
            } elseif ($languages[$mid] > $search) {
                $right = $mid - 1;
            } else {
                $find = true;
                break;
            }
        }
        return $find;
    }

    /**
     * @param array<DatingUser> $usersSortedByIq
     * @param int $lowerIqBound
     * @param int $professorIq
     * @return bool
     */
    public static function findUsers(array $usersSortedByIq, int $lowerIqBound, int $professorIq): array
    {
        $left = 0;
        $right = count($usersSortedByIq) - 1;
        $listUserDating = [];
        while ($left <= $right) {
            $mid = (int)(($right + $left) / 2);
            if ($usersSortedByIq[$mid]->getIq() < $lowerIqBound) {
                $left = $mid + 1;
            } elseif ($usersSortedByIq[$mid]->getIq() > $professorIq) {
                $right = $mid - 1;
            } else {
                for ($i = $left; $i <= $right; $i++) {
                    if ($usersSortedByIq[$i]->getIq() >= $lowerIqBound && $usersSortedByIq[$i]->getIq() <= $professorIq) {
                        $listUserDating[] = $usersSortedByIq[$i];
                    }
                }
                break;
            }
        }
        return $listUserDating;
    }

    /**
     * @param array $sortedPhoneNumbers
     * @param int $search
     * @return int
     */
    public static function findPhoneNumber(array $sortedPhoneNumbers, int $search): int
    {
        $direction ='ASC';
        if (count($sortedPhoneNumbers) > 1) {
            if ($sortedPhoneNumbers[0] > $sortedPhoneNumbers[1]) {
                $direction ='DESC';
            }
        }

        $left = 0;
        $right = count($sortedPhoneNumbers) - 1;
        while ($left <= $right) {
            $mid = (int)(($right + $left) / 2);
            if ($sortedPhoneNumbers[$mid] < $search) {
                if ($direction == 'DESC') {
                    $right = $mid - 1;
                } else {
                    $left = $mid + 1;
                }
            } elseif ($sortedPhoneNumbers[$mid] > $search) {
                if ($direction == 'DESC') {
                    $left = $mid + 1;
                } else {
                    $right = $mid - 1;
                }
            } else {
                return $mid;
            }
        }
        return -1;
    }
}
