<?php

namespace App\Card;

class Card
{
    private $suits = array("spades"=>127137, "hearts"=>127153, "diamonds"=>127169, "clubs"=>127185);
    private $face;
    private $value;

    function __construct(int $number, string $suit)
    {
        $card = "&#".strval(intval($this->suits[$suit]) + $number).";";
        $this->face = $card;
        $this->value = [$number, $suit];
        return $card;
    }

    public function card()
    {
        return $this->face;
    }
}
