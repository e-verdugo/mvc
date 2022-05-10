<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Library;
use App\Repository\LibraryRepository;
use Doctrine\Persistence\ManagerRegistry;

class LibraryController extends AbstractController
{
    /**
     * @Route("/library", name="library")
     */
    public function index(): Response
    {
        return $this->render('library/index.html.twig');
    }

    /**
     * @Route("/library/create", name="create", methods={"GET","HEAD"})
     */
    public function createBook(): Response
    {
        $data = [
            'action' => 'create_process',
            'name' => '',
            'isbn' => '',
            'author' => '',
            'img_url' => '',
            'value' => 'Create new book'
        ];

        return $this->render('library/form.html.twig', $data);
    }

    /**
     * @Route("/library/create", name="create_process", methods={"POST"})
     */
    public function createBookProcess(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $book = new Library();
        $book->setName($request->request->get('name'));
        $book->setISBN($request->request->get('isbn'));
        $book->setAuthor($request->request->get('author'));
        $book->setImgUrl($request->request->get('img_url'));

        // tell Doctrine you want to (eventually) save the book
        // (no queries yet)
        $entityManager->persist($book);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        $params = ["isbn" => $request->request->get('isbn')];
        return $this->redirectToRoute("read_one_process", $params);
    }

    /**
    * @Route("/library/show_all", name="read_many")
    */
    public function showAllBooks(LibraryRepository $libraryRepository): Response
    {
        $books = $libraryRepository
            ->findAll();
        $data = [
            'books' => $books
        ];

        return $this->render('library/all.html.twig', $data);
    }

    /**
     * @Route("/library/show", name="read_one")
     */
    public function showBookByIsbn(): Response
    {
        $data = [
            'action' => 'read_one',
            'value' => 'Go to book',
        ];
        $isbn = $_POST["isbn"] ?? null;
        $params = ["isbn" => $isbn];
        if ($isbn) {
            return $this->redirectToRoute("read_one_process", $params);
        } else {
            return $this->render('library/choice.html.twig', $data);
        }
    }

    /**
     * @Route("/library/show/{isbn}", name="read_one_process")
     */
    public function showBookByIsbnProcess(LibraryRepository $libraryRepository, string $isbn): Response
    {
        $book = $libraryRepository->findBy(
            ['isbn' => $isbn]
        );

        if (!$book) {
            return $this->render('base.html.twig'); //adding in a 404 instead
            // throw $this->createNotFoundException(
            //     'No book found for isbn '.$isbn
            // );
        }

        $data = [
            'action' => '',
            'name' => $book[0]->getName(),
            'isbn' => $book[0]->getISBN(),
            'author' => $book[0]->getAuthor(),
            'img_url' => $book[0]->getImgUrl()
        ];

        return $this->render('library/show.html.twig', $data);
    }

    /**
     * @Route("/library/update/{isbn}", name="update", methods={"GET"})
     */
    public function updateBook(LibraryRepository $libraryRepository, string $isbn): Response
    {
        $book = $libraryRepository->findBy(
            ['isbn' => $isbn]
        );
        $data = [
            'name' => $book[0]->getName(),
            'isbn' => $book[0]->getISBN(),
            'author' => $book[0]->getAuthor(),
            'img_url' => $book[0]->getImgUrl(),
            'value' => 'Update book'
        ];
        return $this->render('library/form.html.twig', $data);
    }

    /**
     * @Route("/library/update/{isbn}", name="update_process", methods={"POST"})
     */
    public function updateBookProcess(ManagerRegistry $doctrine, LibraryRepository $libraryRepository, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $isbn = $request->request->get('isbn');
        $book = $libraryRepository->findBy(
            ['isbn' => $isbn]
        );
        if ($book != null) {
            $book = $book[0];
        }
        $book->setName($request->request->get('name'));
        $book->setISBN($request->request->get('isbn'));
        $book->setAuthor($request->request->get('author'));
        $book->setImgUrl($request->request->get('img_url'));
        $entityManager->persist($book);
        $entityManager->flush();
        $params = ["isbn" => $isbn];
        return $this->redirectToRoute("read_one_process", $params);
    }

    /**
     * @Route("/library/delete/{isbn}", name="delete_process", methods={"POST"})
     */
    public function deleteBookByIsbnProcess(ManagerRegistry $doctrine, LibraryRepository $libraryRepository, string $isbn): Response
    {
        $entityManager = $doctrine->getManager();
        $book = $libraryRepository->findBy(
            ['isbn' => $isbn]
        );
        $book = $book[0];
        $entityManager->remove($book);
        $entityManager->flush();

        return $this->redirectToRoute('read_many');
    }
}
