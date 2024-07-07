<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestowyController extends AbstractController
{
    #[Route("/testowy", 'testowy-index')]  // This is a route annotation
    public function index(): Response
    {
        return new Response('Hello World!');
    }
}
