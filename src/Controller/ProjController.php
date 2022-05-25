<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Plump;
use App\Repository\PlumpRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Proj\Card;
use App\Proj\Deck;
use App\Proj\Player;
use App\Proj\Play;

class ProjController extends AbstractController
{
    /**
     * @Route("/proj", name="proj")
     */
    public function proj(): Response
    {
        return $this->render('proj/game.html.twig');
    }

    /**
     * @Route("/proj/about", name="aboutProj")
     */
    public function aboutProj(): Response
    {
        return $this->render('proj/about.html.twig');
    }

    /**
     * @Route("/proj/reset", name="reset")
     */
    public function reset(ManagerRegistry $doctrine, PlumpRepository $plumpRepository): Response
    {
        session_start();
        session_destroy();
        // $entityManager = $doctrine->getManager();
        // if ($plumpRepository->findAll()) {
        //     $entityManager->remove($plumpRepository->findAll());
        //     $entityManager->flush();
        // }
        return $this->redirectToRoute('proj');
    }

    /**
     * @Route("/proj/plump", name="plump", methods={"GET","HEAD"})
     */
    public function plump(Request $request, SessionInterface $session): Response
    {
        $game = $session->get("game") ?? new Play([new Player("Player"), new Player("Bank")]);
        $newRound = $session->get("newRound") ?? true;
        $pile = [];
        if ($newRound) {
            for ($i=0; $i < count($game->getPlayers()); $i++) { 
                $game->getPlayers()[$i]->resetCards();
            }
            $game->dealCards(); // deals the cards for the round
            $trumf = $game->getTrumf(); // gets the trumf card for the round
            $session->set("trumf", $trumf); // saves the trumf
            $session->set("newRound", false); // toggles the round status
            $session->set("round", $game->getRound()); // sets what round we're on
        } else if ($session->get("bet") == "bet") {
            $trumf = ""; // fix so it is either an actual card or wont read when empty
            // do nothing rn
        } else {
            $trumf = $session->get("trumf"); // gets the saved trumf card
            $round = $session->get("round"); // sets what round we're on
            if ($round > 0) {
                $card = $session->get("card");
                $card = $game->getCard($card);
                array_push($pile, $card);
                // spela själva spelet i rundor gånger
                $session->set("round", $round-1); // sets what round we're on
            } else {
                session_destroy();
                //next round
            }
        }
        $data = [
            'players' => $game->getPlayers(),
            'trumf' => $trumf,
            'stick' => $session->get("stick"),
            'pile' => $pile,
            'disabled' => $session->get("disabledBet"),
        ];
        // $stick = $session->get("stick");
        $session->set("game", $game);
        return $this->render('proj/plump.html.twig', $data);
    }

    /**
     * @Route("/proj/plump", name="plump-process", methods={"POST"})
     */
    public function plumpProcess(Request $request, SessionInterface $session): Response
    {
        if ($request->request->get('reset')) {
            return $this->redirectToRoute('reset');
        } else if ($request->request->get('bet')) {
            $betNum = $request->request->get("betNum");
            $session->set("stick", $betNum);
            $session->set("disabledBet", "disabled");
            $session->set("bet", "bet");
        } else {
            $session->set("card", $_POST);
        }

        return $this->redirectToRoute('plump');
    }
}
