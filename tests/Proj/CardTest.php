<?php

namespace App\Proj;

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
        $this->assertInstanceOf("App\Proj\Card", $card);
    }

    /**
     * Test getting card code (face).
     */
    public function testCardFace(): void
    {
        $card = new Card(0, "hearts");
        $cardFace = $card->card();
        $this->assertInstanceOf("App\Proj\Card", $card);
        $this->assertEquals("&#127153;", $cardFace);
    }

    /**
     * Test getting card value.
     */
    public function testCardValue(): void
    {
        $card = new Card(0, "hearts");
        $cardValue = $card->value();
        $this->assertInstanceOf("App\Proj\Card", $card);
        $this->assertEquals(["1", "hearts"], $cardValue);
    }

    /**
     * Test getting match.
     */
    public function testCardMatch(): void
    {
        $card = new Card(0, "hearts");
        $cardMatch = $card->match();
        $this->assertInstanceOf("App\Proj\Card", $card);
        $this->assertEquals("hearts1", $cardMatch);
    }
}
