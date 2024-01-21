<?php

namespace App\Controller\Agents\welcome;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'agents_welcome_index', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('pages/agents/welcome/index.html.twig');
    }
}
