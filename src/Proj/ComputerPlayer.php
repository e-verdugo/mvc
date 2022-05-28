<?php

namespace App\Proj;

class ComputerPlayer extends Player
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    //bets an amount of stick
    public function betStick($trumf): int
    {
        $possible = [];
        for ($i=0; $i < count($this->cards); $i++) { // check how many cards in hand are trumf or over 11 in value
            if ($this->cards[$i]->value()[1] == $trumf) { // if card is trumf
                array_push($possible, $this->cards[$i]);
            } else if ($this->cards[$i]->value()[0] > 10 || $this->cards[$i]->value()[0] == 1) {
                array_push($possible, $this->cards[$i]);
            }
        }
        $bet = count($possible);
        if ($bet < 0) {
            $bet = 0;
        }
        return $bet;
    }

    //picks a card to play
    public function playCard($pile, $trumf): Card
    {
        $possible = [];
        $card = null;
        if ($pile[0]) { // if there is a card placed already
            for ($i=0; $i < count($this->cards); $i++) { 
                if ($this->cards[$i]->value()[1] == $pile[0]->value()[1]) { // if cards are the same suit as first
                    array_push($possible, $this->cards[$i]);
                }
            }
        } else { // if cpu gets to go first
            $card = $this->cards[rand(0, count($this->cards)-1)];
        }

        if ($possible == [] && $card == null) { // if there are no cards in the right suit
            for ($i=0; $i < count($this->cards); $i++) { 
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