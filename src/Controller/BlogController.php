<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route("/blog", 'blog-index')]  // This is a route annotation
    public function index(): Response
    {
        return new Response('Hello World!');
    }
}