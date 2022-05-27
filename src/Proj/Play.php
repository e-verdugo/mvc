<?php

namespace App\Proj;

use App\Proj\Player;
use App\Proj\Card;

class Play
{
    protected array $players;
    protected array $rounds;
    protected Deck $deck;

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
        $deck = new Deck;
        for ($i=0; $i < count($deck->deck()); $i++) {
            if ($deck->deck()[$i]->match() == key($card)) {
                $newCard = $deck->deck()[$i];
            }
        }
        return $newCard;
    }

    //ends the round and returns winning card
    public function endRound($pile, $trumf): Card
    {
        $winner = $pile[0]; // first card decides colour

        for ($i=1; $i < count($pile); $i++) {
            if ($pile[$i]->value()[1] == $trumf->value()[1]) { //if there is trumph
                if ($pile[$i]->value()[0] == 1) { // if ace (highest)
                    $winner = $pile[$i];
                    break;
                } else if ($winner->value()[1] == $trumf->value()[1]) { // check which trumph is highest
                    if ($pile[$i]->value()[0] > $winner->value()[0]) {
                        $winner = $pile[$i];
                    }
                } else {
                    $winner = $pile[$i];
                }
            } else if ($winner->value()[1] != $trumf->value()[1] && $pile[$i]->value()[1] == $pile[0]->value()[1]) { // not trumph and same colour as first card placed
                if ($pile[$i]->value()[0] == 1) { // if ace (highest)
                    $winner = $pile[$i];
                } else if ($pile[$i]->value()[0] > $winner->value()[0] && $winner->value()[0] != 1) { // if bigger than winner
                    $winner = $pile[$i];
                }
            }
        }
        return $winner;
    }
}
