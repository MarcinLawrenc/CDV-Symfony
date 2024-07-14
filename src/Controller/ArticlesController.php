<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\PsyGonczeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    public function __construct(
        private PsyGonczeRepository $psyGonczeRepository
    )
    {
    }


    #[Route('/articles', 'main_page')]  // This is a route annotation
    public function mainPage(): Response
    {
        $articles = $this -> psyGonczeRepository -> findAll();

        return $this -> render ('articles.html.twig',['articles'=>$articles]);
    }
}

