<?php

declare(strict_types=1);

namespace App\_02;

class DatingUser
{
    public function __construct(private int $iq, private string $name)
    {
    }

    /**
     * @return int
     */
    public function getIq(): int
    {
        return $this->iq;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}