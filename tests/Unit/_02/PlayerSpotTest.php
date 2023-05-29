<?php

declare(strict_types=1);

namespace Unit\_02;

use _02\Children;
use App\_02\Player;
use App\_02\PlayerSpot;
use PHPUnit\Framework\TestCase;

class PlayerSpotTest extends TestCase
{
    /**
     * @dataProvider getDataFindSpot
     * @param $words
     * @param $newPlayer
     * @param $expect
     * @return void
     */
    public function testFindSpot($words, $newPlayer, $expect): void
    {
        $playerSpot = new PlayerSpot($words);
        $actual = $playerSpot->find($newPlayer);
        self::assertEquals($expect, $actual);
    }

    public function getDataFindSpot(): array
    {
        return [
            [
                [
                    new Player(1100, 'Crow Freeman'),
                    new Player(1200, 'London Mollarik'),
                    new Player(1600, 'Raziel of Kain'),
                    new Player(1600, 'Gwinter of Rivia'),
                    new Player(1600, 'Slayer of Fate'),
                    new Player(3000, 'Jon Know'),
                    new Player(4000, 'Caius Cosades'),
                ],
                new Player(1600, 'Mike'),
                2
            ],
            [
                [
                    new Player(1100, 'Crow Freeman'),
                    new Player(1200, 'London Mollarik'),
                    new Player(1600, 'Raziel of Kain'),
                    new Player(1600, 'Gwinter of Rivia'),
                    new Player(1600, 'Slayer of Fate'),
                    new Player(3000, 'Jon Know'),
                    new Player(4000, 'Caius Cosades'),
                ],
                new Player(1700, 'Smite'),
                5
            ],
        ];
    }
}
