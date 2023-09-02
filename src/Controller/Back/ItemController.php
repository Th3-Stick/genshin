<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back')]

class ItemController extends AbstractController
{
    #[Route('/item', name: 'app_back_item')]
    public function index(): Response
    {
        return $this->render('back/item/index.html.twig', [
            'controller_name' => 'ItemController',
        ]);
    }
}
