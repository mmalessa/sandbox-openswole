<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PingController extends AbstractController
{
    #[Route('/ping')]
    public function index(): Response
    {
        return new Response('pong');
    }
}
