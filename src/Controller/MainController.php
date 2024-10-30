<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function homepage(StarshipRepository $repository): \Symfony\Component\HttpFoundation\Response
    {
        $myShip = $repository->findAll();

        return $this->render('main/homepage.html.twig', [
            'myShip' => $myShip,
            'starshipCount' => count($myShip),
        ]);
    }

    #[Route('/starship/{id<\d+>}', name: 'starship_show')]
    public function getStarshipDetail(int $id, StarshipRepository $repository)
    {
        $starship = $repository->findOne($id);

        return $this->render('main/starship.html.twig', ['starship' => $starship]);
    }
}
