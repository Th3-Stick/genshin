<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/boss')]

class BossController extends AbstractController
{
    #[Route('/', name: 'app_front_boss')]
    public function index(): Response
    {
        return $this->render('front/boss/index.html.twig', [
            'controller_name' => 'BossController',
        ]);
    }
}
