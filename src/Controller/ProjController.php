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
        $entityManager = $doctrine->getManager();
        $players = $plumpRepository->findAll();
        $entityManager->remove($players);
        $entityManager->flush();

        return $this->redirectToRoute('proj');
    }

    /**
     * @Route("/proj/plump", name="plump", methods={"GET","HEAD"})
     */
    public function plump(Request $request): Response
    {
        $game = new Play("player1");
        $amount = $request->request->get("amount");
        $data = [
            'players' => $amount,
            'disabled' => "disabled",
        ];
        return $this->render('proj/plump.html.twig', $data);
    }

    /**
     * @Route("/proj/plump", name="plump-process", methods={"POST"})
     */
    public function plumpProcess(Request $request): Response
    {
        $draw = $request->request->get('draw');
        $fold = $request->request->get('fold');
        $reset = $request->request->get('reset');

        if ($reset) {
            return $this->redirectToRoute('reset');
        }
        return $this->redirectToRoute('plump');
    }
}
