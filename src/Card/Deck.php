<?php

namespace App\Card;

use App\Card\Card;

class Deck
{
    protected $deck = [];
    protected $suits = ["spades", "hearts", "diamonds", "clubs"];

    public function __construct()
    {
        for ($x = 0; $x <= 3; $x++) {
            $suit = $this->suits[$x];
            for ($y = 0; $y <= 13; $y++) {
                if ($y != 11) {
                    $card = new Card($y, $suit);
                    array_push($this->deck, $card);
                }
            }
        }
    }

    public function deck()
    {
        return $this->deck;
    }

    public function shuffle()
    {
        shuffle($this->deck);
        return $this->deck;
    }

    public function draw($decksize)
    {
        $randNum = rand(0, $decksize - 1);
        $card = $this->deck[$randNum];
        array_splice($this->deck, $randNum, 1);
        return $card;
    }
}
