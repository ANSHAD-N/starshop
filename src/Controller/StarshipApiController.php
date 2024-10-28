<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'api_starships')]
    public function getCollections(): JsonResponse
    {
        $collections = [
            [
                'name' => 'Star',
                'model' => 'LM_06_XC',
                'captain' => 'Rofter Woolf',
                'status' => 'Under taken by JK Rowling',
            ],
            [
                'name' => 'Star',
                'model' => 'LM_06_XC',
                'captain' => 'Rofter Woolf',
                'status' => 'Under taken by JK Rowling',
            ],
            [
                'name' => 'Star',
                'model' => 'LM_06_XC',
                'captain' => 'Rofter Woolf',
                'status' => 'Under taken by JK Rowling',
            ]
        ];

        return $this->json($collections);

    }

}