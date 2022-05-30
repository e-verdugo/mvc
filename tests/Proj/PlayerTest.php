<?php

namespace App\Proj;

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /**
     * Test the constructor.
     */
    public function testPlayerConstructor(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Proj\Player", $player);
    }

    /**
     * Test getting player name.
     */
    public function testPlayerName(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Proj\Player", $player);
        $name = $player->name();
        $this->assertEquals($name, "PlayerName");
    }

    /**
     * Test getting player cards when there are no cards.
     */
    public function testPlayerCardsNoCards(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Proj\Player", $player);
        $cards = $player->cards();
        $this->assertEquals(count($cards), 0);
    }

    /**
     * Test getting player cards if there is a card.
     * Also tests the add, remove, and reset function at the same time.
     */
    public function testPlayerAddCards(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Proj\Player", $player);
        $card1 = new Card(0, "hearts");
        $card2 = new Card(1, "hearts");
        $player->addCards($card1);
        $player->addCards($card2);
        $player->removeCard($card1);
        $cards = $player->cards();
        $this->assertInstanceOf("App\Proj\Card", $cards[0]);
        $this->assertEquals(count($cards), 1);
        $cardValue = $cards[0]->value();
        $this->assertEquals(["2", "hearts"], $cardValue);
        $player->resetCards();
        $this->assertEquals($player->cards(), []);
    }

    /**
     * Test adding and getting stick.
     */
    public function testPlayerGetAndAddStick(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Proj\Player", $player);
        $player->addStick(1);
        $stick = $player->stick();
        $this->assertEquals($stick, 1);
    }

    /**
     * Test adding and getting bets.
     */
    public function testPlayerGetAndAddBet(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Proj\Player", $player);
        $player->addBetStick("1");
        $bet = $player->betStick();
        $this->assertEquals($bet, 1);
    }

    /**
     * Test adding and getting score.
     */
    public function testPlayerGetAndAddScore(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Proj\Player", $player);
        $player->updateScore(12);
        $score = $player->score();
        $this->assertEquals($score, [12]);
    }
}
