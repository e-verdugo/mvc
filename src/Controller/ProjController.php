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
     * @Route("/proj", name="proj-process", methods={"POST"})
     */
    public function projProcess(Request $request, SessionInterface $session): Response
    {
        $session->set("players", $request->request->get('amount'));
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
        $game = $session->get("game") ?? new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $newRound = $session->get("newRound") ?? true;
        $pile = $session->get("pile") ?? [];
        $winningCard = null;

        if ($newRound) { // run only once at the start of the round
            for ($i=0; $i < count($game->getPlayers()); $i++) { 
                $game->getPlayers()[$i]->resetCards();
            }
            $session->set("disabled", "disabled");
            $trumf = $game->getTrumf(); // gets the trumf card for the round
            $game->dealCards(); // deals the cards for the round
            $session->set("trumf", $trumf); // saves the trumf
            $session->set("newRound", false); // toggles the round status
            $session->set("round", $game->getRound()); // sets what round we're on
            $session->set("amount", $session->get("players")); // WILL ONLY WORK ONCE, PUT IT IN A BETTER PLACE -------
        }

        $trumf = $session->get("trumf"); // gets the saved trumf card

        if ($session->get("nextRound") == true) { // nextRound (same big round but next inner round)
            $session->set("pile", []);
            $pile = [];
            $session->set("nextRound", false);
        } else if ($session->get("bet") == "bet") {// when setting a bet
            $session->set("bet", "disabled");
            $session->set("disabled", "");
        } else if ($newRound == false) { // playing the game
            $round = $session->get("round"); // gets what round we're on
            if ($round > 0) {
                if (count($pile) <= $session->get("amount") - 1) { // if not everyone has laid their card
                    $card = $session->get("card");
                    try {
                        $card = $game->getCard($card);
                        $session->set("playerCard", $session->get("card"));
                        array_push($pile, $card); // put card in pile on table
                        $game->getPlayers()[0]->removeCard($card); // remove card from hand (bc it is on the table now)
                    } catch (\Throwable) {
                        // to avoid crashing if user reloads page without having clicked on anything
                    }
                    $session->set("check", "");
                    // bank spelar ett kort ----------------------------------------------------------------------------
                } else { // if all cards have been placed for the round, end round
                    $winningCard = $game->endRound($pile, $trumf);
                    $card = $session->get("playerCard");
                    $card = $game->getCard($card);
                    if ($winningCard == $card) { // player got the stick
                        $session->set("currStick", $session->get("currStick") + 1);
                    } // else bank got the stick -----------------------------------------------------------------------
                    $session->set("round", $round-1); // sets what round we're on
                }
            } else {
                $game->finishRound();
                //next round
            }
        }
        $data = [
            'player' => $game->getPlayers()[0],
            'trumf' => $trumf,
            'stick' => $session->get("stick"),
            'pile' => $pile,
            'bet' => $session->get("bet"),
            'winner' => $winningCard,
            'disabled' => $session->get("disabled"),
            'currStick' => $session->get("currStick"),
            'check' => $session->get("check"),
        ];
        // $stick = $session->get("stick");
        $session->set("game", $game);
        $session->set("pile", $pile);
        return $this->render('proj/plump.html.twig', $data);
    }

    /**
     * @Route("/proj/plump", name="plump-process", methods={"POST"})
     */
    public function plumpProcess(Request $request, SessionInterface $session): Response
    {
        $session->set("players", $request->request->get('amount'));
        if ($request->request->get('reset')) {
            return $this->redirectToRoute('reset');
        } else if ($request->request->get('bet')) {
            $betNum = $request->request->get("betNum");
            $session->set("stick", $betNum);
            $session->set("bet", "bet");
        } else if ($request->request->get('roundDone')) {
            $session->set("nextRound", true);
        } else {
            $session->set("card", $_POST);
            $session->set("check", "disabled");
        }

        return $this->redirectToRoute('plump');
    }
}
