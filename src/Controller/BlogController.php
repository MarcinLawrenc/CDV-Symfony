<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\PsyGonczeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    public function __construct(
        private PsyGonczeRepository $psyGonczeRepository
    )
    {
    }

    #[Route("/blog", 'blog-index')]  // This is a route annotation
    public function index(): Response
    {
        $articles = $this -> psyGonczeRepository -> findAll();
        dump($articles);
        return new Response ('To bedzie strona glowna');
    }
}