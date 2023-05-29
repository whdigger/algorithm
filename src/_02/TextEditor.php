<?php

declare(strict_types=1);

namespace App\_02;

class TextEditor
{
    private $textLength;
    private $text;

    public function __construct(string $text)
    {
        $this->text = mb_str_split($text);
        $this->textLength = count($this->text);
    }

    public function insertCharacterAt(int $position, string $c)
    {
        $prev = '';
        for ($i = $position - 1; $i < $this->textLength - 1; $i++) {
            $next = $this->text[$i + 1];
            $this->text[$i + 1] = $prev;
            $prev = $next;
        }
        $this->text[$position] = $c;
        $this->text[$this->textLength + 1] = $prev;
        ++$this->textLength;
    }

    public function backspace(int $position)
    {
        for ($i = $position-1; $i < $this->textLength - 1; $i++) {
            $this->text[$i] = $this->text[$i + 1];
        }
        unset ($this->text[$this->textLength-1]);
        --$this->textLength;
    }

    public function getText()
    {
        return implode($this->text);
    }
}
