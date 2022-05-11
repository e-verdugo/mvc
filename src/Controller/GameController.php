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

class GameController extends AbstractController
{
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
        /**
         * @var Game $game
         */
        $game = $session->get("game") ?? new Game("Player");
        $check = $session->get("check") ?? $game->checkTwentyone($game->getPlayer());
        $disabled = $session->get("disabled") ?? "";
        $data = [
            'player' => $game->getPlayer(),
            'bank' => $game->getBank(),
            'check' => $check,
            'disabled' => $disabled,
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
        $reset = $request->request->get('reset');
        /**
         * @var Game $game
         */
        $game = $session->get("game");
        if ($draw) {
            $game->getPlayer()->addCards($game->getDeck()->draw(count($game->getDeck()->deck())));
        } elseif ($fold) {
            $session->set("disabled", "disabled");
            $playerWon = $game->bankPull();
            $session->set("check", "You lost!");
            if ($playerWon === true) {
                $session->set("check", "You won!");
            }
        } elseif ($reset) {
            session_destroy();
        }
        return $this->redirectToRoute('play');
    }
}