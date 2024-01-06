<?php

declare(strict_types=1);

namespace App\_02;

class NewWord
{
    private array $dictionary;

    public function __construct(array $dictionary)
    {
        $this->dictionary = $dictionary;
    }

    public function getDictionary(): array
    {
        return $this->dictionary;
    }

    public function insert(string $word)
    {
        $insertWord = $word;
        $position = $this->findPositionInsert($word);
        $odlSize = count($this->dictionary);
        $endPosition = $odlSize + 1;
        for ($i = $position; $i < $endPosition; $i++) {
            if ($i < $odlSize) {
                [$prevWord, $this->dictionary[$i]] = [$this->dictionary[$i], $insertWord];
            } else {
                [$prevWord, $this->dictionary[]] = [null, $insertWord];
            }

            $insertWord = $prevWord;
        }
    }

    private function findPositionInsert(string $word)
    {
        $left = 0;
        $right = count($this->dictionary) - 1;
        while ($left < $right) {
            $mid = (int)(($left + $right) / 2);
            if (strcmp($word, $this->dictionary[$mid]) > 1) {
                $left = $mid + 1;
            } else {
                $right = $mid;
            }
        }

        return $left;
    }
}