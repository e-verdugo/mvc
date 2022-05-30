<?php

namespace App\Proj;

/**
 * Player class, creates a Player object
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class Player
{
    /**
     * @var array<Card> $cards
     */
    protected array $cards = [];
    protected string $name = "";
    protected int $stick = 0;
    protected int $betStick = 0;
    /**
     * @var array<int> $score
     */
    protected array $score = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the hand
     * @return array<Card>
     */
    public function cards(): array
    {
        return $this->cards;
    }

    /**
     * Returns the player name
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Returns how many sticks taken
     */
    public function stick(): int
    {
        return $this->stick;
    }

    /**
     * Adds a new stick
     */
    public function addStick(int $stick): void
    {
        $this->stick = $stick;
    }

    /**
     * Returns the current bet
     */
    public function betStick(): int
    {
        return $this->betStick;
    }

    /**
     * Adds a new bet
     */
    public function addBetStick(string $betStick): void
    {
        $this->betStick = intval($betStick);
    }

    /**
     * Adds a card to the hand
     */
    public function addCards(Card $card): void
    {
        array_push($this->cards, $card);
    }

    /**
     * Removes a card from the hand
     */
    public function removeCard(Card $card): void
    {
        $key = array_search($card, $this->cards);
        unset($this->cards[$key]);
        $this->cards = array_values($this->cards);
    }

    /**
     * Resets the cards on hand
     */
    public function resetCards(): void
    {
        $this->cards = [];
    }

    /**
     * Returns the players score
     * @return array<int>
     */
    public function score(): array
    {
        return $this->score;
    }

    /**
     * Adds a new score to the array
     */
    public function updateScore(int $score): void
    {
        array_push($this->score, $score);
    }
}
