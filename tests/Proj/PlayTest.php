<?php

namespace App\Proj;

use PHPUnit\Framework\TestCase;

class PlayTest extends TestCase
{
    /**
     * Test the constructor.
     */
    public function testPlayConstructor(): void
    {
        $play = new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $this->assertInstanceOf("App\Proj\Play", $play);
    }

    /**
     * Test getting the player.
     */
    public function testPlayGetPlayer(): void
    {
        $play = new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $this->assertInstanceOf("App\Proj\Play", $play);
        $players = $play->getPlayers();
        $this->assertInstanceOf("App\Proj\Player", $players[0]);
        $this->assertInstanceOf("App\Proj\ComputerPlayer", $players[1]);
    }

    /**
     * Test getting the deck.
     */
    public function testPlayGetDeck(): void
    {
        $play = new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $this->assertInstanceOf("App\Proj\Play", $play);
        $deck = $play->getDeck();
        $this->assertInstanceOf("App\Proj\Deck", $deck);
    }

    /**
     * Test getting the round and "ending" the round.
     */
    public function testPlayGetRound(): void
    {
        $play = new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $this->assertInstanceOf("App\Proj\Play", $play);
        $round = $play->getRound();
        $this->assertEquals($round, 10);
        $play->finishRound();
        $round = $play->getRound();
        $this->assertEquals($round, 9);
        for ($i=0; $i < 20; $i++) { 
            $play->finishRound();
        }
        $round = $play->getRound();
        $this->assertEquals($round, false);
    }

    /**
     * Test dealing cards.
     */
    public function testPlayDealCards(): void
    {
        $play = new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $this->assertInstanceOf("App\Proj\Play", $play);
        $play->dealCards();
        $players = $play->getPlayers();
        $this->assertEquals(count($players[0]->cards()), 10);
        $this->assertEquals(count($players[1]->cards()), 10);
    }

    /**
     * Test get trumf.
     */
    public function testPlayGetTrumf(): void
    {
        $play = new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $this->assertInstanceOf("App\Proj\Play", $play);
        $trumf = $play->getTrumf();
        $this->assertInstanceOf("App\Proj\Card", $trumf);
    }

    /**
     * Test the matching function that translates between the card press and the card.
     */
    public function testPlayGetCard(): void
    {
        $play = new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $this->assertInstanceOf("App\Proj\Play", $play);
        $newCard = new Card(0, "hearts");
        $play->getPlayers()[0]->addCards($newCard);
        $cardArray = ["hearts1" => ["something"]];
        $card = $play->getCard($cardArray);
        $this->assertInstanceOf("App\Proj\Card", $card);
    }

    /**
     * Test ending the round.
     * Also tests getHighest.
     */
    public function testPlayEndRound(): void
    {
        $play = new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $this->assertInstanceOf("App\Proj\Play", $play);
        $pile = [new Card(0, "hearts"), new Card(1, "hearts")];
        $trumf = new Card(10, "hearts");
        $winner = $play->endRound($pile, $trumf);
        $this->assertEquals($winner, $pile[0]);
        $pile = [new Card(5, "hearts"), new Card(7, "hearts")];
        $trumf = new Card(10, "spades");
        $winner = $play->endRound($pile, $trumf);
        $this->assertEquals($winner, $pile[1]);
    }
}
