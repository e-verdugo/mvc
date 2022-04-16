<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Card\Card;
use App\Card\Deck;
use App\Card\Deck2;
use App\Card\Player;
use App\Card\Game;

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
        $deck = new Deck();
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
        $deck = new Deck();
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
        /**
         * @var array<Card> $deck
         */
        $deck = $session->get("deck") ?? new Deck();
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
        /**
         * @var array<Card> $deck
         */
        $deck = $session->get("deck") ?? new Deck();
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
     * @Route("/card/deck/deal/{players}/{number}", name="deal")
     */
    public function player(int $players, int $number, SessionInterface $session): Response
    {
        $playerhands = [];
        /**
         * @var array<Card> $deck
         */
        $deck = $session->get("deck") ?? new Deck();
        for ($j = 1; $j <= $players; $j++) {
            $player = new Player(strval($j));
            for ($i = 1; $i <= $number; $i++) {
                $player->addCards($deck->draw(count($deck->deck())));
            }
            array_push($playerhands, $player);
        }
        $session->set("deck", $deck);
        $data = [
            'players' => $playerhands,
            'deck' => $deck->deck(),
        ];
        return $this->render('card/player.html.twig', $data);
    }
    /**
     * @Route("/card/deck2", name="deck2")
     */
    public function deck2(): Response
    {
        $deck = new Deck2();
        $data = [
            'deck' => $deck->deck(),
        ];
        return $this->render('card/deck.html.twig', $data);
    }
    /**
     * @Route("/game", name="game")
     */
    public function game(): Response
    {
        return $this->render('card/game.html.twig');
    }
    /**
     * @Route("/game/doc", name="doc")
     */
    public function doc(): Response
    {
        return $this->render('card/doc.html.twig');
    }
    /**
     * @Route("/game/play", name="play", methods={"GET","HEAD"})
     */
    public function play(SessionInterface $session): Response
    {
        $game = $session->get("game") ?? new Game("Player");
        $data = [
            'player' => $game->getPlayer(),
            'bank' => $game->getBank(),
            'check' => $game->checkTwentyone($game->getPlayer()),
        ];
        $session->set("game", $game);
        return $this->render('card/play.html.twig', $data);
    }
    /**
     * @Route("/game/play", name="play-process", methods={"POST"})
     */
    public function playProcess(SessionInterface $session, Request $request): Response
    {
        $draw = $request->request->get('draw');
        $fold = $request->request->get('fold');
        $game = $session->get("game");
        if ($draw) {
            $game->getPlayer()->addCards($game->getDeck()->draw(count($game->getDeck()->deck())));
        } elseif ($fold) {
            $game->bankPull();
            // end game
        } else {
            session_destroy();
        }
        return $this->redirectToRoute('play');
    }
}
