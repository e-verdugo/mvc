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
    public function getPlayer() : Player
    {
        return $this->player;
    }

    //returns the bank player object
    public function getBank() : Player
    {
        return $this->bank;
    }

    //returns the deck object
    public function getDeck() : Deck
    {
        return $this->deck;
    }

    //check if hand value is 21 or more, returns string
    public function checkTwentyone(Player $player) : string
    {
        $cardsValue = 0;
        for ($i = 0; $i <= count($player->cards())-1; $i++) {
            $cardsValue += intval($player->cards()[$i]->value()[0]);
        }
        if ($cardsValue > 21) {
            return "You lost!";
        } elseif ($cardsValue == 21) {
            return "You won!";
        } else {
            return "Fold or draw another card.";
        }
    }

        //bank pulls player hand amount of cards
        public function bankPull() : string
        {
            
        }
}
