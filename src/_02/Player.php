<?php

declare(strict_types=1);

namespace App\_02;

class Player
{
    public function __construct(private int $rating, private string $nickName)
    {
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getNickName(): string
    {
        return $this->nickName;
    }
}
