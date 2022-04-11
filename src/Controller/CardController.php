<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CardController extends AbstractController
{
    /**
     * @Route("/card", name="card")
     */
    public function card(): Response
    {

        return $this->render('card/card.html.twig');
    }
    /**
     * @Route("/card/deck", name="deck")
     */
    public function deck(): Response
    {
        $deck = new \App\Deck\Deck();
        $data = [
            'deck' => $deck->deck(),
        ];
        return $this->render('card/deck.html.twig', $data);
    }
    /**
     * @Route("/card/deck/shuffle", name="shuffle")
     */
    public function shuffle(SessionInterface $session): Response
    {
        $deck = new \App\Deck\Deck();
        $data = [
            'deck' => $deck->shuffle(),
        ];
        $session->set("deck", $deck);
        return $this->render('card/deck.html.twig', $data);
    }
    /**
     * @Route("/card/deck/draw", name="draw")
     */
    public function draw(SessionInterface $session): Response
    {
        $deck = $session->get("deck") ?? new \App\Deck\Deck();
        $data = [
            'card' => $deck->draw(count($deck->deck())),
            'deck' => $deck->deck(),
        ];
        $session->set("deck", $deck);
        return $this->render('card/draw.html.twig', $data);
    }
    /**
     * @Route("/card/deck/draw/{number}", name="draw-number")
     */
    public function drawNumber(int $number, SessionInterface $session): Response
    {
        $cards = [];
        $deck = $session->get("deck") ?? new \App\Deck\Deck();
        for ($i = 1; $i <= $number; $i++) {
            array_push($cards, $deck->draw(count($deck->deck())));
        }
        $data = [
            'cards' => $cards,
            'deck' => $deck->deck(),
        ];
        $session->set("deck", $deck);
        return $this->render('card/drawnum.html.twig', $data);
    }
    /**
     * @Route("/card/deck/deal/{players}/{number}", name="draw-player")
     */
    public function player(int $players, int $number, SessionInterface $session): Response
    {
        $cards = [];
        $playerhands = [];
        $deck = $session->get("deck") ?? new \App\Deck\Deck();
        for ($i = 1; $i <= $players; $i++) {
            $cards = [];
            for ($i = 1; $i <= $number; $i++) {
                array_push($cards, $deck->draw(count($deck->deck())));
            }
            array_push($playerhands, $cards);
        }
        $data = [
            'players' => $playerhands,
            'deck' => $deck->deck(),
        ];
        $session->set("deck", $deck);
        return $this->render('card/player.html.twig', $data);
    }
}

// json_encode($data)