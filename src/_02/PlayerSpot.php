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

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function addToQueue(Player $newPlayer)
    {
        $index = $this->searchRightMostPlayerWithRating($newPlayer->getRating());
        $this->insertPlayerInQueueWithShift($index, $newPlayer);
    }

    // @TODO Релизуйте функцию поиска "последнего среди равных"
    private function searchRightMostPlayerWithRating(int $ratingBand)
    {
        $left = 0;
        $right = count($this->players);

        while ($left < $right) {
            $middle = (int)(($right + $left) / 2);
            if ($this->players[$middle]->getRating() > $ratingBand) {
                $right = $middle;
            } else {
                $left = $middle + 1;
            }
        }

        return $right;
    }

    // @TODO Реализуйте вставку в очередь (в списке queue гарантированно будет свободное место)
    private function insertPlayerInQueueWithShift(int $index, Player $player)
    {
        $insert = $player;
        $odlSize = count($this->players);
        $endPosition = $odlSize + 1;
        for ($i = $index; $i < $endPosition; $i++) {
            if ($i < $odlSize) {
                [$prevWord, $this->players[$i]] = [$this->players[$i], $insert];
            } else {
                [$prevWord, $this->players[]] = [null, $insert];
            }

            $insert = $prevWord;
        }
    }
}
