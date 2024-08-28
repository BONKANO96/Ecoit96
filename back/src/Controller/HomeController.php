<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'HomeController',
            'google_maps_api_key' => $_ENV['GOOGLE_MAPS_API_KEY'],
        ]);
    }
}