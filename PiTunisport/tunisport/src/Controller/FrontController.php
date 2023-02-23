<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'front')]
    public function front(): Response
    {
        return $this->render('front.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
