<?php

declare(strict_types=1);

namespace App\_02;

class PlayerSpot
{
    public function __construct(private array $players)
    {
    }

    public function find(Player $newPlayer)
    {
        $left = 0;
        $right = count($this->players);

        while ($left < $right) {
            $middle = (int)(($right + $left) / 2);
            if ($this->players[$middle]->getRating() < $newPlayer->getRating()) {
                $left = $middle + 1;
            } else {
                $right = $middle;
            }
        }
        return $left;
    }
}
