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
use App\Proj\ComputerPlayer;
use App\Proj\Play;

/**
 * ProjController class, contains the routes for the project
 */
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
        /**
         * @var Play $game
         */
        $game = $session->get("game") ?? new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $newRound = $session->get("newRound") ?? true;
        $pile = $session->get("pile") ?? [];
        $winningCard = null;

        if ($newRound) { // run only once at the start of the round
            $count = count($game->getPlayers());
            for ($i=0; $i < $count; $i++) {
                $game->getPlayers()[$i]->resetCards();
            }
            $trumf = $game->getTrumf(); // gets the trumf card for the round
            $game->dealCards(); // deals the cards for the round
            $session->set("trumf", $trumf); // saves the trumf
            $session->set("newRound", false); // toggles the round status
            $session->set("round", $game->getRound()); // sets what round we're on
            $session->set("check", "disabled");
            $session->set("disabled", "disabled");
        }

        $trumf = $session->get("trumf"); // gets the saved trumf card
        $round = $session->get("round"); // gets what round we're on

        if ($session->get("nextRound") == true) { // nextRound (same big round but next inner round)
            $session->set("pile", []);
            $pile = [];
            $session->set("nextRound", false);
            $session->set("disabled", "");
        } elseif ($session->get("bet") == "bet") { // when setting a bet
            $session->set("bet", "disabled");
            $session->set("disabled", "");
            $game->getPlayers()[0]->addBetStick($session->get("stick")); // save the bet to the player object
            $game->getPlayers()[1]->addBetStick($game->getPlayers()[1]->chooseBet($trumf));
        } elseif ($newRound == false) { // playing the game
            if ($round > 0) {
                if (count($pile) < 2) { // if not everyone has laid their card
                    try {
                        $card = $session->get("card");
                        $card = $game->getCard($card);
                        $session->set("playerCard", $session->get("card"));
                        array_push($pile, $card); // put card in pile on table
                        $game->getPlayers()[0]->removeCard($card); // remove card from hand (bc it is on the table now)
                        $cpuCard = $game->getPlayers()[1]->playCard($pile, $trumf);
                        array_push($pile, $cpuCard); // put card in pile on table
                        $game->getPlayers()[1]->removeCard($cpuCard); // remove card from hand (bc it is on the table now)
                    } catch (\Throwable) {
                        // to avoid crashing if user reloads page without having clicked on anything
                    }
                    $session->set("disabled", "disabled");
                    $session->set("check", "");
                } else { // if all cards have been placed for the round, end round
                    $winningCard = $game->endRound($pile, $trumf); // get the card that wins the pile
                    $card = $session->get("playerCard");
                    $card = $game->getCard($card);
                    if ($winningCard == $card) { // player got the stick
                        $game->getPlayers()[0]->addStick($game->getPlayers()[0]->stick() + 1);
                    } else { // else bank got the stick
                        $game->getPlayers()[1]->addStick($game->getPlayers()[1]->stick() + 1);
                    }
                    $session->set("disabled", "disabled");
                    $session->set("round", $round-1); // sets what round we're on
                }
            } else { // next round
                $game->finishRound();
                for ($i=0; $i < 2; $i++) { // log the scores
                    $score = 0;
                    if ($game->getPlayers()[$i]->betStick() == $game->getPlayers()[$i]->score()) {
                        $score = $game->getPlayers()[$i]->score()+10;
                    } else {
                        $score = 0;
                    }
                    $game->getPlayers()[$i]->updateScore($score);
                    $game->getPlayers()[$i]->addStick(0);
                }
                if ($game->getRound() == false) {
                    $player = new Plump();
                    $player->setName($game->getPlayers()[0]->name());
                    $player->setScore($game->getPlayers()[0]->score());
                    // spara player score till orm
                } else {
                    $session->set("bet", "");
                    $count = count($game->getPlayers());
                    for ($i=0; $i < $count; $i++) {
                        $game->getPlayers()[$i]->resetCards();
                    }
                    $trumf = $game->getTrumf(); // gets the trumf card for the round
                    $game->dealCards(); // deals the cards for the round
                    $session->set("trumf", $trumf); // saves the trumf
                    $session->set("round", $game->getRound()); // sets what round we're on
                    $session->set("check", "disabled");
                    $session->set("disabled", "disabled");
                }
            }
        }
        $data = [
            'player' => $game->getPlayers()[0],
            'trumf' => $trumf,
            'pile' => $pile,
            'winner' => $winningCard,
            'round' => $game->getRound(),
            'bet' => $session->get("bet"),
            'disabled' => $session->get("disabled"),
            'check' => $session->get("check"),
            'playerBet' => $game->getPlayers()[0]->betStick(),
            'playerScore' => $game->getPlayers()[0]->stick(),
            'cpuBet' => $game->getPlayers()[1]->betStick(),
            'cpuScore' => $game->getPlayers()[1]->stick(),
        ];
        $session->set("game", $game);
        $session->set("pile", $pile);
        return $this->render('proj/plump.html.twig', $data);
    }

    /**
     * @Route("/proj/plump", name="plump-process", methods={"POST"})
     */
    public function plumpProcess(Request $request, SessionInterface $session): Response
    {
        if ($request->request->get('reset')) {
            return $this->redirectToRoute('reset');
        } elseif ($request->request->get('bet')) {
            $session->set("stick", $request->request->get("betNum"));
            $session->set("bet", "bet");
            $session->set("check", "disabled");
        } elseif ($request->request->get('roundDone')) {
            $session->set("nextRound", true);
            $session->set("check", "disabled");
        } else {
            $session->set("card", $_POST);
            $session->set("check", "disabled");
        }

        return $this->redirectToRoute('plump');
    }
}
