<?php

namespace App\Proj;

/**
 * Computer player class, creates a ComputerPlayer object, extending the Player class
 */
class ComputerPlayer extends Player
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    /**
     * Bets an amount of stick
     */
    public function chooseBet(Card $trumf): int
    {
        $possible = [];
        for ($i=0; $i < count($this->cards); $i++) { // check how many cards in hand are trumf or over 11 in value
            if ($this->cards[$i]->value()[1] == $trumf) { // if card is trumf
                array_push($possible, $this->cards[$i]);
            } elseif ($this->cards[$i]->value()[0] > 10 || $this->cards[$i]->value()[0] == 1) {
                array_push($possible, $this->cards[$i]);
            }
        }
        $bet = count($possible);
        return $bet;
    }

    /**
     * Picks a card to play
     * @param array<Card> $pile
     */
    public function playCard(array $pile, Card $trumf): Card
    {
        $possible = [];
        $card = null;
        if (isset($pile[0])) { // if there is a card placed already
            $count = count($this->cards);
            for ($i=0; $i < $count; $i++) {
                if ($this->cards[$i]->value()[1] == $pile[0]->value()[1]) { // if cards are the same suit as first
                    array_push($possible, $this->cards[$i]);
                }
            }
        } else { // if cpu gets to go first
            $card = $this->cards[rand(0, count($this->cards)-1)];
        }

        if ($possible == [] && $card == null) { // if there are no cards in the right suit
            $count = count($this->cards);
            for ($i=0; $i < $count; $i++) {
                if ($this->cards[$i]->value()[1] == $trumf->value()[1]) { // if cards are the same suit as first
                    array_push($possible, $this->cards[$i]);
                }
            }
        }

        if ($card == null) { // if there already is a card placed, pick one of the possible ones
            if (count($possible) > 0) {
                $card = $possible[rand(0, count($possible)-1)];
            } else {
                $card = $this->cards[rand(0, count($this->cards)-1)];
            }
        }

        return $card;
        // if needs stick then put the highest one / most chance of getting the stick
        // else put the lowest one
    }
}
