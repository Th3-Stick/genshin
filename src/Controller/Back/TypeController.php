<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back')]

class TypeController extends AbstractController
{
    #[Route('/type', name: 'app_back_type')]
    public function index(): Response
    {
        return $this->render('back/type/index.html.twig', [
            'controller_name' => 'TypeController',
        ]);
    }
}
