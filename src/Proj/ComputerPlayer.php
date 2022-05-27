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
            } else if ($this->cards[$i]->value()[0] > 11 || $this->cards[$i]->value()[0] == 1) {
                array_push($possible, $this->cards[$i]);
            }
        }
        $bet = count($possible) - 1;
        if ($bet < 0) {
            $bet = 0;
        }
        return $bet;
    }

    //picks a card to play
    public function playCard(): Card
    {
        // check how many cards in hand
        // has player played? chose according to the rules:
        // if more than one card can be picked
        // if needs stick then put the highest one / most chance of getting the stick
        // else put the lowest one
    }
}