<?php

declare(strict_types=1);

namespace _03;

class KeyValuePair
{
    public function __construct(public string $key, public string $value)
    {
    }

    public function getKey(): string
    {
        return $this->key;
    }
}