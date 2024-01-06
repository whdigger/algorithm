<?php

declare(strict_types=1);

namespace _03;

class VeryDynamicArray
{
    private array $values = [];
    private int $size = 8;
    private int $numberOfElement = 0;

    public function getHash(string $key): int
    {
        $hash = 0;
        $chars = mb_str_split($key);
        foreach ($chars as $char) {
            $hash += ord($char);
        }

        return $hash;
    }

    public function add(string $key, string $value)
    {
        $index = $this->getHash($key) % $this->size;
        $this->values[$index] = new KeyValuePair($key, $value);
        $this->numberOfElement++;

        if ($this->numberOfElement == $this->size) {
            $this->resize($this->size * 2);
        }
    }

    public function get(string $key): ?KeyValuePair
    {
        $index = $this->getHash($key) % $this->size;

        return $this->values[$index] ?? null;
    }

    public function deleteElementAt(int $index)
    {
        if (!isset($this->values[$index])) {
            return;
        }

        unset($this->values[$index]);
        $this->numberOfElement--;
        if ($this->numberOfElement == $this->size / 4) {
            $this->resize($this->size / 2);
        }
    }

    public function deleteKey(string $key)
    {
        $index = $this->getHash($key) % $this->size;
        $this->deleteElementAt($index);
    }

    public function getAllKeys(): array
    {
        $keys = [];
        foreach ($this->values as $key => $value) {
            if ($value) {
                $keys[] = $key;
            }
        }

        return $keys;
    }

    public function getAllValues(): array
    {
        $values = [];
        foreach ($this->values as $value) {
            if ($value) {
                $values[] = $value;
            }
        }

        return $values;
    }

    private function resize(int $newSize)
    {
        $newValues = [];
        foreach ($this->values as $value) {
            $index = $this->getHash($value->getKey()) % $this->size;
            $newValues[$index] = $value;
        }
        $this->values = $newValues;
        $this->size = $newSize;
    }
}