<?php

declare(strict_types=1);

namespace Unit\_02;

use App\_02\Player;
use App\_02\PlayerSpot;
use PHPUnit\Framework\TestCase;

class PlayerSpotTest extends TestCase
{
    /**
     * @dataProvider getDataFindSpot
     */
    public function testFindSpot($words, $newPlayer, $expect): void
    {
        $playerSpot = new PlayerSpot($words);
        $actual = $playerSpot->find($newPlayer);
        self::assertEquals($expect, $actual);
    }

    /**
     * @dataProvider getDataAddQueueSpot
     */
    public function testAddQueueSpot($words, $newPlayer, $expect): void
    {
        $playerSpot = new PlayerSpot($words);
        $playerSpot->addToQueue($newPlayer);
        self::assertEquals($expect, $playerSpot->getPlayers());
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
                2,
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
                5,
            ],
        ];
    }

    public function getDataAddQueueSpot(): array
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
                [
                    new Player(1100, 'Crow Freeman'),
                    new Player(1200, 'London Mollarik'),
                    new Player(1600, 'Raziel of Kain'),
                    new Player(1600, 'Gwinter of Rivia'),
                    new Player(1600, 'Slayer of Fate'),
                    new Player(1600, 'Mike'),
                    new Player(3000, 'Jon Know'),
                    new Player(4000, 'Caius Cosades'),
                ],
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
                [
                    new Player(1100, 'Crow Freeman'),
                    new Player(1200, 'London Mollarik'),
                    new Player(1600, 'Raziel of Kain'),
                    new Player(1600, 'Gwinter of Rivia'),
                    new Player(1600, 'Slayer of Fate'),
                    new Player(1700, 'Smite'),
                    new Player(3000, 'Jon Know'),
                    new Player(4000, 'Caius Cosades'),
                ],
            ],
        ];
    }
}
