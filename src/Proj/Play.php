<?php

namespace App\Proj;

use App\Proj\Player;
use App\Proj\Card;

class Play
{
    private array $players;
    private array $rounds;
    private Deck $deck;

    // a game can have up to 5 players
    public function __construct(array $players)
    {
        $this->players = $players;
        $this->deck = new Deck();
        $this->rounds = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    }

    //returns the player array
    public function getPlayers(): array
    {
        return $this->players;
    }

    //returns the deck object
    public function getDeck(): Deck
    {
        return $this->deck;
    }

    //returns the current round
    public function getRound(): int
    {
        return $this->rounds[0];
    }

    //removes the top round
    public function finishRound(): void
    {
        array_shift($this->rounds);
    }

    //deals the cards
    public function dealCards(): void
    {
        for ($i=0; $i < $this->getRound(); $i++) {
            for ($j=0; $j < count($this->getPlayers()); $j++) {
                $this->getPlayers()[$j]->addCards($this->getDeck()->draw(count($this->getDeck()->deck())));
            }
        }
        $this->deck = new Deck();
    }

    //returns the trumf card
    public function getTrumf(): Card
    {
        return $this->getDeck()->draw(count($this->getDeck()->deck()));
    }

    //returns the matching card
    public function getCard($card): Card
    {
        $card = array_pop($card);
        for ($i=0; $i < count($this->getPlayers()[0]->cards()); $i++) {
            if ($this->getPlayers()[0]->cards()[$i]->card() == $card) { // matcher ej av nån anledning, för få kort???
                $newCard = $this->getPlayers()[0]->cards()[$i];
            }
        }
        return $newCard;
    }
}
