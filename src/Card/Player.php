<?php

namespace App\Card;

class Player
{
    private $cards = [];
    private $name = "";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function cards()
    {
        return $this->cards;
    }

    public function name()
    {
        return $this->name;
    }

    public function addCards($deck)
    {
        array_push($this->cards, $deck);
    }
}
