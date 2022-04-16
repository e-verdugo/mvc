<?php

namespace App\Card;

use App\Card\Player;
use App\Card\Card;

class Game
{
    private Player $player;
    private Player $bank;
    private Deck $deck;

    // a game can hold one player and a bank
    public function __construct(string $player)
    {
        $this->player = new Player($player);
        $this->bank = new Player("Bank");
        $this->deck = new Deck();
    }

    //returns the player object
    public function getPlayer(): Player
    {
        return $this->player;
    }

    //returns the bank player object
    public function getBank(): Player
    {
        return $this->bank;
    }

    //returns the deck object
    public function getDeck(): Deck
    {
        return $this->deck;
    }

    //check if hand value is 21 or more, returns points
    public function checkTwentyone(Player $player): int
    {
        $cardsValue = 0;
        $count = count($player->cards())-1;
        for ($i = 0; $i <= $count; $i++) {
            $cardsValue += intval($player->cards()[$i]->value()[0]);
        }
        return $cardsValue;
    }

    //bank pulls player hand amount of cards, returns if player won
    public function bankPull(): bool
    {
        $count = count($this->getPlayer()->cards())-1;
        for ($i = 0; $i <= $count; $i++) {
            $this->getBank()->addCards($this->getDeck()->draw(count($this->getDeck()->deck())));
        }
        if (intval($this->checkTwentyone($this->getBank())) < intval($this->checkTwentyone($this->getPlayer()))) {
            return true; // player wins
        } elseif ($this->checkTwentyone($this->getBank()) == 21) {
            return false; // bank wins
        } elseif ($this->checkTwentyone($this->getBank()) > 21) {
            return true; // bank loses
        }
        return false; // player loses
    }
}
