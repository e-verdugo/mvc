<?php

namespace App\Proj;

use App\Proj\Card;

/**
 * Deck class, creates a Deck object
 */
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

    /**
     * Returns the cards in the deck
     * @return array<Card>
     */
    public function deck(): array
    {
        return $this->deck;
    }

    /** 
     * Shuffle the deck and return the cards
     * @return array<Card>
     */
    public function shuffle(): array
    {
        shuffle($this->deck);
        return $this->deck;
    }

    /** 
     * Pulls a random card from the deck and returns it
     * @return Card
     */
    public function draw(int $decksize): Card
    {
        $randNum = rand(0, $decksize - 1);
        $card = $this->deck[$randNum];
        array_splice($this->deck, $randNum, 1);
        return $card;
    }
}
