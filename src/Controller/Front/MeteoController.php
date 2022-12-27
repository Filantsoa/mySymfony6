<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeteoController extends AbstractController
{
    #[Route('/meteo', name: 'app_front_meteo')]
    public function index(): Response
    {
        return $this->render('front/meteo/index.html.twig', [
            'controller_name' => 'MeteoController',
        ]);
    }
}
