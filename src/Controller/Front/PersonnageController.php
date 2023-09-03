<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/personnages')]

class PersonnageController extends AbstractController
{
    #[Route('/', name: 'app_front_personnage')]
    public function index(): Response
    {
        return $this->render('front/personnage/index.html.twig', [
        ]);
    }

    #[Route('/name', name: 'app_front_personnage_details')]
    public function show(): Response
    {
        return $this->render('front/personnage/show.html.twig', [
        ]);
    }
}
