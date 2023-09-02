<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back')]

class ArmeController extends AbstractController
{
    #[Route('/arme', name: 'app_back_arme')]
    public function index(): Response
    {
        return $this->render('back/arme/index.html.twig', [
            'controller_name' => 'ArmeController',
        ]);
    }
}
