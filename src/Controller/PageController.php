<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {
        $hello = 'Hello World';
        return $this->render('page/index.html.twig', [
            'hello' => $hello,
            'controller_name' => 'PageController',
        ]);
    }
}
