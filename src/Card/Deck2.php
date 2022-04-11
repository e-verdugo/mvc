<?php

namespace App\Card;

use App\Card\Card;
use App\Card\Deck;

class Deck2 extends Deck
{
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
        $card = new Card(14, "hearts");
        array_push($this->deck, $card);
        array_push($this->deck, $card);
    }
}
