<?php

namespace App\Proj;

use PHPUnit\Framework\TestCase;

class ComputerPlayerTest extends TestCase
{
    /**
     * Test choosing what to bet.
     */
    public function testChooseBet(): void
    {
        $cpu = new ComputerPlayer("CPU");
        $cpu->addCards(new Card(0, "hearts"));
        $cpu->addCards(new Card(1, "spades"));
        $this->assertInstanceOf("App\Proj\ComputerPlayer", $cpu);
        $bet = $cpu->chooseBet(new Card(0, "hearts"));
        $this->assertEquals($bet, 1);
        $cpu->addCards(new Card(12, "spades"));
        $bet = $cpu->chooseBet(new Card(0, "hearts"));
        $this->assertEquals($bet, 2);
    }

    /**
     * Test choosing a card to play.
     */
    public function testPlayCard(): void
    {
        $cpu = new ComputerPlayer("CPU");
        $cpu->addCards(new Card(1, "hearts"));
        $cpu->addCards(new Card(1, "spades"));
        $this->assertInstanceOf("App\Proj\ComputerPlayer", $cpu);
        $card = $cpu->playCard([new Card(1, "hearts"), new Card(2, "hearts")], new Card(0, "hearts"));
        $this->assertInstanceOf("App\Proj\Card", $card);
    }
}
