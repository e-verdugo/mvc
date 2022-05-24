<?php

namespace App\Proj;

class Player
{
    /**
     * @var array<Card> $cards
     */
    private array $cards = [];
    private string $name = "";
    private int $stick = 0;
    private int $score = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /** @return array<Card> */
    public function cards(): array
    {
        return $this->cards;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function stick(): int
    {
        return $this->stick;
    }

    public function addCards(Card $card): void
    {
        array_push($this->cards, $card);
    }

    public function addStick(int $stick): void
    {
        $this->stick = $stick;
    }

    public function score(): int
    {
        return $this->score;
    }

    public function updateScore(int $score): void
    {
        $this->score = $score;
    }
}
