<?php

namespace App\Proj;

class Player
{
    /**
     * @var array<Card> $cards
     */
    protected array $cards = [];
    protected string $name = "";
    protected int $stick = 0;
    protected int $score = 0;

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

    public function removeCard(Card $card): void
    {
        $key = array_search($card, $this->cards);
        unset($this->cards[$key]);
        $this->cards = array_values($this->cards);
    }

    public function addStick(int $stick): void
    {
        $this->stick = $stick;
    }

    public function resetCards(): void
    {
        $this->cards = [];
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
