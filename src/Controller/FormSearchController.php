<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {

        return $this->render('home.html.twig');
    }
    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {

        return $this->render('about.html.twig');
    }
    /**
     * @Route("/report", name="report")
     */
    public function report(): Response
    {

        return $this->render('report.html.twig');
    }
}

class FormSearchController extends AbstractController
{
    /**
     * @Route("/form/search", name="form-search")
     */
    public function search(Request $request): Response
    {
        $data = [
            'search' => $request->query->get('search'),
        ];

        return $this->render('form/search.html.twig', $data);
    }
}
