<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /**
     * Test the constructor.
     */
    public function testPlayerConstructor(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Card\Player", $player);
    }

    /**
     * Test getting player name.
     */
    public function testPlayerName(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Card\Player", $player);
        $name = $player->name();
        $this->assertEquals($name, "PlayerName");
    }

    /**
     * Test getting player cards when there are no cards.
     */
    public function testPlayerCardsNoCards(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Card\Player", $player);
        $cards = $player->cards();
        $this->assertEquals(count($cards), 0);
    }

    /**
     * Test getting player cards if there is a card. Also tests the add card function at the same time.
     */
    public function testPlayerAddCards(): void
    {
        $player = new Player("PlayerName");
        $this->assertInstanceOf("App\Card\Player", $player);
        $card = new Card(0, "hearts");
        $player->addCards($card);
        $cards = $player->cards();
        $this->assertInstanceOf("App\Card\Card", $cards[0]);
        $this->assertEquals(count($cards), 1);
        $cardValue = $cards[0]->value();
        $this->assertEquals(["1", "hearts"], $cardValue);
    }
}
