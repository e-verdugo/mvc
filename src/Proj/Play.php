<?php

namespace App\Proj;

use App\Proj\Player;
use App\Proj\Card;

/**
 * Game class, creates a Play object which keeps track of the game
 */
class Play
{
    /**
     * @var array<Player> $players
     */
    protected array $players;
    /**
     * @var array<int> $rounds
     */
    protected array $rounds;
    protected Deck $deck;

    /**
     * @param array<Player> $players
     */
    public function __construct(array $players)
    {
        $this->players = $players;
        $this->deck = new Deck();
        $this->rounds = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    }

    /**
     * Returns the player array
     * @return array<Player> */
    public function getPlayers(): array
    {
        return $this->players;
    }

    /**
     * Returns the deck object
     */
    public function getDeck(): Deck
    {
        return $this->deck;
    }

    /**
     * Returns the current round
     */
    public function getRound(): int
    {
        if (isset($this->rounds[0])) {
            return $this->rounds[0];
        }
        return false;
    }

    /**
     * Removes the top round
     */
    public function finishRound(): void
    {
        array_shift($this->rounds);
    }

    /**
     * Deals the cards
     */
    public function dealCards(): void
    {
        for ($i = 0; $i < $this->getRound(); $i++) {
            $count = count($this->getPlayers());
            for ($j = 0; $j < $count; $j++) {
                $this->getPlayers()[$j]->addCards($this->getDeck()->draw(count($this->getDeck()->deck())));
            }
        }
        $this->deck = new Deck();
    }

    /**
     * Returns the trumf card
     */
    public function getTrumf(): Card
    {
        return $this->getDeck()->draw(count($this->getDeck()->deck()));
    }

    /**
     * Returns the matching card
     * @param array<mixed> $card
     */
    public function getCard(array $card): Card
    {
        $deck = new Deck();
        $count = count($deck->deck());
        for ($i = 0; $i < $count; $i++) {
            if ($deck->deck()[$i]->match() == key($card)) {
                $newCard = $deck->deck()[$i];
            }
        }
        return $newCard;
    }

    /**
     * Ends the round and returns winning card
     * @param array<Card> $pile
     */
    public function endRound(array $pile, Card $trumf): Card
    {
        $oneColour = [];
        $winner = $pile[0]; // first card decides colour
        $count = count($pile);
        for ($i = 0; $i < $count; $i++) { // check for trumf
            if ($pile[$i]->value()[1] == $trumf->value()[1]) { //if there is trumph
                array_push($oneColour, $pile[$i]);
            }
            if ($oneColour != []) {
                $winner = $this->getHighest($oneColour);
            }
        }
        if ($winner->value()[1] != $trumf->value()[1]) { // if there is no trumph
            for ($i = 0; $i < $count; $i++) {
                if ($pile[$i]->value()[1] == $pile[0]->value()[1]) { //if it is same colour as first card
                    array_push($oneColour, $pile[$i]);
                }
                if ($oneColour != []) {
                    $winner = $this->getHighest($oneColour);
                }
            }
        }
        return $winner;
    }

    /**
     * Returns the highest card of a pile
     * @param array<Card> $pile
     */
    public function getHighest(array $pile): Card
    {
        $highest = $pile[0];
        $count = count($pile);
        for ($i = 0; $i < $count; $i++) {
            if ($pile[$i]->value()[0] == 1) { // if ace (highest)
                return $pile[$i];
            } elseif ($pile[$i]->value()[0] > $highest->value()[0]) {
                $highest = $pile[$i];
            }
        }
        return $highest;
    }
}
