<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    /**
     * Test the constructor.
     */
    public function testCardConstructor(): void
    {
        $suits = ["spades", "hearts", "diamonds", "clubs"];
        $randomValue = rand(0, 13);
        $randomNumber = rand(0, 3);
        $randomSuit = $suits[$randomNumber];
        $card = new Card($randomValue, $randomSuit);
        $this->assertInstanceOf("App\Card\Card", $card);
    }

    /**
     * Test getting card code (face).
     */
    public function testCardFace(): void
    {
        $card = new Card(0, "hearts");
        $cardFace = $card->card();
        $this->assertInstanceOf("App\Card\Card", $card);
        $this->assertEquals("&#127153;", $cardFace);
    }

    /**
     * Test getting card value.
     */
    public function testCardValue(): void
    {
        $card = new Card(0, "hearts");
        $cardValue = $card->value();
        $this->assertInstanceOf("App\Card\Card", $card);
        $this->assertEquals(["1", "hearts"], $cardValue);
    }
}
