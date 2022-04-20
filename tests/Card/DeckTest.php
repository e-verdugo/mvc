<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

class DeckTest extends TestCase
{
    /**
     * Test the constructor.
     */
    public function testDeckConstructor(): void
    {
        $deck = new Deck();
        $this->assertInstanceOf("App\Card\Deck", $deck);
    }

    /**
     * Test getting the cards in the deck.
     */
    public function testDeckDeck(): void
    {
        $deck = new Deck();
        $this->assertInstanceOf("App\Card\Deck", $deck);
        $cards = $deck->deck();
        $this->assertInstanceOf("App\Card\Card", $cards[0]);
        $this->assertEquals(count($cards), 52);
    }

    /**
     * Test shuffling the deck.
     */
    public function testDeckShuffle(): void
    {
        $deck = new Deck();
        $this->assertInstanceOf("App\Card\Deck", $deck);
        $cards = $deck->deck();
        $cardsShuffled = $deck->shuffle();
        $this->assertInstanceOf("App\Card\Card", $cards[0]);
        $this->assertEquals(count($cards), 52);
        $this->assertNotEquals($cards, $cardsShuffled);
    }

    /**
     * Test drawing a card from the deck.
     * Original function draws a random card, should maybe be split into a draw function and a
     * "get random existing card" function.
     */
    public function testDeckDraw(): void
    {
        $deck = new Deck();
        $this->assertInstanceOf("App\Card\Deck", $deck);
        $drawnCard = $deck->draw(count($deck->deck()));
        $this->assertInstanceOf("App\Card\Card", $drawnCard);
        $this->assertEquals(count($deck->deck()), 51);
    }
}
