<?php

namespace App\Card;

class Player
{
    /**
     * @var array<Card> $cards
     */
    private array $cards = [];
    private string $name = "";

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /** @return array<Card> */
    public function cards() : array
    {
        return $this->cards;
    }

    public function name() : string
    {
        return $this->name;
    }

    public function addCards(Card $card) : void
    {
        array_push($this->cards, $card);
    }
}
