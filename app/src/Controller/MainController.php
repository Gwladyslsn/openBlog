<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/brouette')]
    public function index(): Response {
        return new Response('Hello');
    }
}