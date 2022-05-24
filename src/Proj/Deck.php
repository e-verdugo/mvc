<?php

namespace App\Proj;

use App\Proj\Card;

class Deck
{
    /**
     * @var array<Card> $deck
     */
    protected array $deck = [];
    /**
     * @var array<string> $suits
     */
    protected array $suits = ["spades", "hearts", "diamonds", "clubs"];

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

    /** @return array<Card> */
    public function deck(): array
    {
        return $this->deck;
    }

    /** @return array<Card> */
    public function shuffle(): array
    {
        shuffle($this->deck);
        return $this->deck;
    }

    /** @return Card */
    public function draw(int $decksize): Card
    {
        $randNum = rand(0, $decksize - 1);
        $card = $this->deck[$randNum];
        array_splice($this->deck, $randNum, 1);
        return $card;
    }
}
