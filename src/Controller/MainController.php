<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function homepage(): \Symfony\Component\HttpFoundation\Response
    {
        $starshipCount = 567;
        $myShip = [
            'name' => 'Star',
            'Mode' => 'LM_06_XC',
            'Captain' => 'Rofter Woolf',
        ];

        return $this->render('main/homepage.html.twig', [
            'myShip' => $myShip,
            'starshipCount' => $starshipCount,
        ]);
    }
}
