<?php

declare(strict_types=1);

namespace App\_02;

class ArrayList
{
    private array $dataArray;
    private int $iteration = 0;

    public function __construct(array $dataArray)
    {
        $this->dataArray = $dataArray;
    }

    private function isSorted(): bool
    {
        $prev = PHP_INT_MIN;
        foreach ($this->dataArray as $current) {
            if ($current < $prev) {
                return false;
            }
            $prev = $current;
        }

        return true;
    }

    public function randomSort(): array
    {
        $min = 0;
        $max = count($this->dataArray) - 1;

        while (!$this->isSorted()) {
            $first = rand($min, $max);
            $second = rand($min, $max);
            [
                $this->dataArray[$first],
                $this->dataArray[$second],
            ] = [
                $this->dataArray[$second],
                $this->dataArray[$first],
            ];
            ++$this->iteration;
        }

        return $this->dataArray;
    }
}