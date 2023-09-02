<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back')]

class PersonnageController extends AbstractController
{
    #[Route('/personnage', name: 'app_back_personnage')]
    public function index(): Response
    {
        return $this->render('back/personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }
}
