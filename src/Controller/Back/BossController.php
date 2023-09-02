<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back')]

class BossController extends AbstractController
{
    #[Route('/boss', name: 'app_back_boss')]
    public function index(): Response
    {
        return $this->render('back/boss/index.html.twig', [
            'controller_name' => 'BossController',
        ]);
    }
}
