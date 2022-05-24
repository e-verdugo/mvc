<?php

namespace App\Proj;

use App\Proj\Player;
use App\Proj\Card;

class Play
{
    private Player $player1;
    private Deck $deck;

    // a game can have up to 5 players
    public function __construct(string $player1)
    {
        $this->player1 = new Player($player1);
        // $this->player2 = new Player($player2);
        // $this->player3 = new Player($player3);
        // $this->player4 = new Player($player4);
        // $this->player5 = new Player($player5);
        $this->deck = new Deck();
    }

    //returns a player object
    public function getPlayer($player): Player
    {
        return $this->$player;
    }

    //returns the deck object
    public function getDeck(): Deck
    {
        return $this->deck;
    }
}
