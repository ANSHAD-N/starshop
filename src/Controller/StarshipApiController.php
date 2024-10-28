<?php

namespace App\Controller;

use App\Models\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'api_starships')]
    public function getCollections(): JsonResponse
    {
        $collections = [
            new Starship(
                'Star',
                'LM_06_XC',
                'Rofter Woolf',
                'Under taken by JK Rowling',),
            new Starship(
                'Star',
                'LM_06_XC',
                'Rofter Woolf',
                'Under taken by JK Rowling',),
            new Starship(
                'Star',
                'LM_06_XC',
                'Rofter Woolf',
                'Under taken by JK Rowling',),
        ];

        return $this->json($collections);

    }

}