<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Proj;
use App\Repository\ProjRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Proj\Card;
use App\Proj\Deck;
use App\Proj\Player;
use App\Proj\ComputerPlayer;
use App\Proj\Play;

/**
 * @SuppressWarnings(PHPMD.ElseExpression)
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
     * @Route("/proj/cleancode", name="cleancode")
     */
    public function cleancode(): Response
    {
        return $this->render('proj/cleancode.html.twig');
    }

    /**
     * @Route("/proj/highscore", name="highscore")
     */
    public function highscore(ProjRepository $projRepository): Response
    {
        $scores = $projRepository
            ->findAll();
        $data = [
            'scores' => $scores
        ];

        return $this->render('proj/highscore.html.twig', $data);
    }

    /**
     * @Route("/proj/reset", name="reset")
     */
    public function reset(ManagerRegistry $doctrine, ProjRepository $projRepository): Response
    {
        session_start();
        session_destroy();
        $entityManager = $doctrine->getManager();
        foreach ($projRepository->findAll() as $entity) {
            $entityManager->remove($entity);
        }
        $entityManager->flush();
        return $this->redirectToRoute('proj');
    }

    /**
     * @Route("/proj/plump", name="plump", methods={"GET","HEAD"})
     */
    public function plump(SessionInterface $session, ManagerRegistry $doctrine): Response
    {
        /**
         * @var Play $game
         */
        $game = $session->get("game") ?? new Play([new Player("Spelare"), new ComputerPlayer("CPU")]);
        $newRound = $session->get("newRound") ?? true;
        $pile = $session->get("pile") ?? [];
        $winningCard = null;

        if ($newRound) { // run only once at the start of the round
            $this->newRound($game, $session);
            $session->set("newRound", false); // toggles the round status
        }

        $trumf = $session->get("trumf"); // gets the saved trumf card
        $round = $session->get("round"); // gets what round we're on

        if ($session->get("nextRound") == true) { // nextRound (same big round but next inner round)
            $session->set("pile", []);
            $pile = [];
            $session->set("nextRound", false);
            $session->set("disabled", "");
            if ($session->get("winningPlayer") == "cpu") { // if new inner round and cpu shall go first, cpu goes here
                $pile = $this->layCards($game, $session, $pile, $trumf);
            }
        } elseif ($session->get("bet") == "bet") { // when setting a bet
            $session->set("bet", "disabled");
            $session->set("disabled", "");
            $game->getPlayers()[0]->addBetStick($session->get("stick")); // save the bet to the player object
            $game->getPlayers()[1]->addBetStick($game->getPlayers()[1]->chooseBet($trumf));
        } elseif ($newRound == false) { // playing the game
            if ($round > 0) {
                $pile = $this->layCards($game, $session, $pile, $trumf);
                if (count($pile) == 2) { // if all cards have been placed for the round, end round
                    $winningCard = $this->endRound($pile, $trumf); // get the card that wins the pile
                    $card = $game->getCard($session->get("card"));
                    if ($winningCard == $card) { // player got the stick
                        $session->set("winningPlayer", "player");
                        $game->getPlayers()[0]->addStick($game->getPlayers()[0]->stick() + 1);
                    } else { // else bank got the stick
                        $session->set("winningPlayer", "cpu");
                        $game->getPlayers()[1]->addStick($game->getPlayers()[1]->stick() + 1);
                    }
                    $session->set("disabled", "disabled");
                    $session->set("round", $round - 1); // sets what round we're on
                }
            } else { // next round
                $game->finishRound();
                $game->logScores();
                $this->endOfRound($game, $session, $doctrine);
            }
        }
        $data = [
            'players' => $game->getPlayers(),
            'player' => $game->getPlayers()[0],
            'trumf' => $session->get("trumf"),
            'pile' => $pile,
            'winner' => $winningCard,
            'round' => $game->getRound(),
            'bet' => $session->get("bet"),
            'disabled' => $session->get("disabled"),
            'playerBet' => $game->getPlayers()[0]->betStick(),
            'playerStick' => $game->getPlayers()[0]->stick(),
            'cpuBet' => $game->getPlayers()[1]->betStick(),
            'cpuStick' => $game->getPlayers()[1]->stick(),
        ];
        $session->set("game", $game);
        $session->set("pile", $pile);
        return $this->render('proj/plump.html.twig', $data);
    }

    /**
     * @SuppressWarnings(PHPMD.Superglobals)
     * @Route("/proj/plump", name="plump-process", methods={"POST"})
     */
    public function plumpProcess(Request $request, SessionInterface $session): Response
    {
        if ($request->request->get('reset')) {
            session_destroy();
        } elseif ($request->request->get('bet')) {
            $session->set("stick", $request->request->get("betNum"));
            $session->set("bet", "bet");
        } elseif ($request->request->get('roundDone')) {
            $session->set("nextRound", true);
        } else {
            $session->set("card", $_POST);
        }
        return $this->redirectToRoute('plump');
    }

    /**
     * Starts a new "big" round
     */
    protected function newRound(Play $game, SessionInterface $session): void
    {
        $count = count($game->getPlayers());
        for ($i = 0; $i < $count; $i++) {
            $game->getPlayers()[$i]->resetCards();
        }
        $trumf = $game->getTrumf(); // gets the trumf card for the round
        $game->dealCards(); // deals the cards for the round
        $session->set("trumf", $trumf); // saves the trumf
        $session->set("round", $game->getRound()); // sets what round we're on
        $session->set("disabled", "disabled");
        $session->set("start", true); // to know how to check cards
    }

    /**
     * Lays the cards on the "table" (pile)
     * @param array<Card> $pile
     * @return array<Card>
     */
    protected function layCards(Play $game, SessionInterface $session, array $pile, Card $trumf): array
    {
        if (count($pile) < 2) { // if not everyone has laid their card
            try {
                if (count($pile) == 1) { // if computer has already placed a card
                    $card = $game->getCard($session->get("card"));
                    array_push($pile, $card); // put card in pile on table
                    $game->getPlayers()[0]->removeCard($card); // remove card from hand (bc it is on the table now)
                    $session->set("disabled", "disabled");
                } elseif ($this->getStarter($game, $session) == true) { // if computer gets to go first
                    $cpuCard = $game->getPlayers()[1]->playCard($pile, $trumf);
                    array_push($pile, $cpuCard); // put card in pile on table
                    $game->getPlayers()[1]->removeCard($cpuCard); // remove card from hand
                } elseif ($this->getStarter($game, $session) == false) { // if player gets to go first
                    $card = $game->getCard($session->get("card"));
                    array_push($pile, $card); // put card in pile on table
                    $game->getPlayers()[0]->removeCard($card); // remove card from hand (bc it is on the table now)
                    $cpuCard = $game->getPlayers()[1]->playCard($pile, $trumf);
                    array_push($pile, $cpuCard); // put card in pile on table
                    $game->getPlayers()[1]->removeCard($cpuCard); // remove card from hand
                    $session->set("disabled", "disabled");
                }
                $session->set("start", false);
            } catch (\Throwable) {
                // to avoid crashing if user reloads page without having clicked on anything
            }
        }
        return $pile;
    }

    /**
     * Ends the round and returns winning card
     * @param array<Card> $pile
     */
    protected function endRound(array $pile, Card $trumf): Card
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
    protected function getHighest(array $pile): Card
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

    /**
     * Returns true if CPU starts the laying
     */
    protected function getStarter(Play $game, SessionInterface $session): bool
    {
        return ($game->getPlayers()[0]->betStick() < $game->getPlayers()[1]->betStick()
            && $session->get("start") == true || $session->get("winningPlayer") == "cpu");
    }

    /**
     * Either saves the points to the database or starts the next round depending on if the game is over or not
     */
    protected function endOfRound(Play $game, SessionInterface $session, ManagerRegistry $doctrine): void
    {
        if ($game->getRound() === false) { // at the end save the player score as highscore to the database
            $player = new Proj();
            $player->setName($game->getPlayers()[0]->name());
            $count = count($game->getPlayers()[0]->score()) - 1;
            $score = 0;
            for ($i = 0; $i < $count; $i++) {
                $score += $game->getPlayers()[0]->score()[$i];
            }
            $player->setScore($score);
            $entityManager = $doctrine->getManager();
            $entityManager->persist($player);
            $entityManager->flush();
        } else { // next/new round
            $session->set("bet", "");
            $this->newRound($game, $session);
        }
    }
}
