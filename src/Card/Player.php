<?php

namespace App\Player;

class Player
{
    private $cards = [];
    private $name = "";

    function __construct($name)
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
