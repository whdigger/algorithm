<?php

declare(strict_types=1);

namespace App\_02;

class Children
{
    private $words;

    public function __construct(array $words)
    {
        $this->words = $words;
    }

    public function permutateWords()
    {
        $i = 0;
        $length = count($this->words);
        while ($i < $length) {
            $found = false;
            for ($k = $i + 1; $k < $length; $k++) {
                if ($this->words[$i] == $this->words[$k]) {
                    $found = true;
                    break;
                }
            }

            if ($found) {
                $word = mb_str_split($this->words[$i]);
                $wordLength = count($word);
                $word[$wordLength] = $word[0];
                for ($j = 0; $j < $wordLength; $j++) {
                    $word[$j] = $word[$j + 1];
                }
                unset($word[$wordLength]);
                $this->words[$i] = implode('', $word);
            } else {
                $i++;
            }
        }
    }

    public function find()
    {
        return $this->words;
    }
}
