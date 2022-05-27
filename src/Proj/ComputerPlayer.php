<?php

namespace App\Proj;

class ComputerPlayer extends Player
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    //bets an amount of stick
    public function betStick(): int
    {
        // check how many cards in hand are trumf or over 11 in value
        // return that sum - 1
        // if less than 0 return 0
        // trumf ace always makes 1
        return $bet;
    }

    //picks a card to play
    public function playCard(): Card
    {
        // check how many cards in hand
        // has player played? chose according to the rules
        // if more than one card can be picked
        // if needs stick then put the highest one / most chance of getting the stick
        // else put the lowest one
    }
}