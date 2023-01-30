<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Test extends AbstractController {

    #[Route('/', name: 'test')]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}