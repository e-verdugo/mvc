<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

class Deck2Test extends TestCase
{
    /**
     * Test the constructor.
     */
    public function testDeck2Constructor(): void
    {
        $deck = new Deck2();
        $this->assertInstanceOf("App\Card\Deck2", $deck);
    }

    /**
     * Test getting the cards in the deck.
     */
    public function testDeck2Deck(): void
    {
        $deck = new Deck2();
        $this->assertInstanceOf("App\Card\Deck", $deck);
        $cards = $deck->deck();
        $this->assertInstanceOf("App\Card\Card", $cards[0]);
        $this->assertEquals(count($cards), 54);
    }
}
