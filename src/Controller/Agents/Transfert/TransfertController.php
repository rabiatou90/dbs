<?php

namespace App\Controller\Agents\Transfert;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransfertController extends AbstractController
{
    #[Route('/transfert', name: 'agents_transfert_index', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('pages/agents/transfert/index.html.twig');
    }
}
