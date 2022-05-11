<?php

namespace App\Card;

use App\Card\Card;
use App\Card\Deck;

class Deck2 extends Deck
{
    public function __construct()
    {
        parent::__construct();
        $card = new Card(14, "hearts");
        array_push($this->deck, $card);
        array_push($this->deck, $card);
    }
}
