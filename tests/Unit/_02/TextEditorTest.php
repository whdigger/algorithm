<?php

declare(strict_types=1);

namespace Unit\_02;

use App\_02\TextEditor;
use PHPUnit\Framework\TestCase;

class TextEditorTest extends TestCase
{
    /**
     * @dataProvider getDataInsertCharacterAt
     * @param $text
     * @param $position
     * @param $char
     * @param $expect
     * @return void
     */
    public function testInsertCharacterAt($text, $position, $char, $expect): void
    {
        $textEditor = new TextEditor($text);
        $textEditor->insertCharacterAt($position, $char);
        self::assertEquals($expect, $textEditor->getText());
    }

    public function getDataInsertCharacterAt(): array
    {
        return [
            ['Приет мир', 3, 'в', 'Привет мир'],
        ];
    }

    /**
     * @dataProvider getDataBackspace
     * @param $text
     * @param $position
     * @param $expect
     * @return void
     */
    public function testBackspace($text, $position, $expect): void
    {
        $textEditor = new TextEditor($text);
        $textEditor->backspace($position);
        self::assertEquals($expect, $textEditor->getText());
    }

    public function getDataBackspace(): array
    {
        return [
            ['Привет Ммир!', 9, 'Привет Мир!'],
        ];
    }
}
