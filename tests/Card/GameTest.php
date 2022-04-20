<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * Test the constructor.
     */
    public function testGameConstructor(): void
    {
        $game = new Game("PlayerName");
        $this->assertInstanceOf("App\Card\Game", $game);
    }

    /**
     * Test getting the player.
     */
    public function testGameGetPlayer(): void
    {
        $game = new Game("PlayerName");
        $this->assertInstanceOf("App\Card\Game", $game);
        $player = $game->getPlayer();
        $this->assertInstanceOf("App\Card\Player", $player);
    }

    /**
     * Test getting the bank.
     */
    public function testGameGetBank(): void
    {
        $game = new Game("PlayerName");
        $this->assertInstanceOf("App\Card\Game", $game);
        $bank = $game->getBank();
        $this->assertInstanceOf("App\Card\Player", $bank);
    }

    /**
     * Test getting the deck.
     */
    public function testGameGetDeck(): void
    {
        $game = new Game("PlayerName");
        $this->assertInstanceOf("App\Card\Game", $game);
        $deck = $game->getDeck();
        $this->assertInstanceOf("App\Card\Deck", $deck);
    }

    /**
     * Test checking the value of a hand without cards, should return 0.
     */
    public function testGameCheckTwentyOneWithoutCards(): void
    {
        $game = new Game("PlayerName");
        $this->assertInstanceOf("App\Card\Game", $game);
        $player = $game->getPlayer();
        $this->assertInstanceOf("App\Card\Player", $player);
        $check = $game->checkTwentyone($player);
        $this->assertEquals(0, $check);
    }

    /**
     * Test checking the value of a hand with cards, should return more than 0.
     * Might be good to mock the player?
     */
    public function testGameCheckTwentyOneWithCards(): void
    {
        $game = new Game("PlayerName");
        $this->assertInstanceOf("App\Card\Game", $game);
        $game->getPlayer()->addCards($game->getDeck()->draw(count($game->getDeck()->deck())));
        $player = $game->getPlayer();
        $this->assertInstanceOf("App\Card\Player", $player);
        $check = $game->checkTwentyone($player);
        $card = $player->cards();
        $cardValue = $card[0]->value();
        $this->assertEquals($cardValue[0], $check);
    }

    /**
     * Test the bank pulling cards and checking what hand (bank or player) has the highest value.
     * This one checks one card.
     * Original function should maybe be split into two, one to pull the cards and one to check who won.
     * Might be good to mock the player?
     */
    public function testGameBankPullOneCard(): void
    {
        $game = new Game("PlayerName");
        $this->assertInstanceOf("App\Card\Game", $game);
        $game->getPlayer()->addCards($game->getDeck()->draw(count($game->getDeck()->deck())));
        $playerWon = $game->bankPull();
        $this->assertEquals(gettype($playerWon), "boolean");
    }

    /**
     * Test the bank pulling cards and checking what hand (bank or player) has the highest value.
     * This one checks three cards.
     * Original function should maybe be split into two, one to pull the cards and one to check who won.
     * Might be good to mock the player?
     */
    public function testGameBankPullThreeCards(): void
    {
        $game = new Game("PlayerName");
        $this->assertInstanceOf("App\Card\Game", $game);
        $game->getPlayer()->addCards($game->getDeck()->draw(count($game->getDeck()->deck())));
        $game->getPlayer()->addCards($game->getDeck()->draw(count($game->getDeck()->deck())));
        $game->getPlayer()->addCards($game->getDeck()->draw(count($game->getDeck()->deck())));
        $playerWon = $game->bankPull();
        $this->assertEquals(gettype($playerWon), "boolean");
    }

    /**
     * Test the bank pulling cards and checking what hand (bank or player) has the highest value.
     * This one checks when player gets 21. In most cases player should win, bank can only win på getting 21.
     * Original function should maybe be split into two, one to pull the cards and one to check who won.
     * Might be good to mock the player?
     */
    public function testGameBankPullPlayer21(): void
    {
        $game = new Game("PlayerName");
        $this->assertInstanceOf("App\Card\Game", $game);
        $card1 = new Card(7, "hearts");
        $card2 = new Card(7, "spades");
        $card3 = new Card(7, "diamonds");
        $game->getPlayer()->addCards($card1);
        $game->getPlayer()->addCards($card2);
        $game->getPlayer()->addCards($card3);
        $playerWon = $game->bankPull();
        $this->assertEquals(gettype($playerWon), "boolean");
    }
}
