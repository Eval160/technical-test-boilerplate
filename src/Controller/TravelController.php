<?php

namespace App\Controller;

use App\Repository\TravelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravelController extends AbstractController
{
    #[Route('/', name: 'app_travel')]
    public function index(TravelRepository $travelRepository): Response
    {
        $travels = $travelRepository->findAll();
        return $this->render('travel/index.html.twig', [
            'travels' => $travels,
        ]);
    }
}
