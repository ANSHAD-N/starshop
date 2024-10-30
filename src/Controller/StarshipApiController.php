<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'api_starships')]
    public function getCollections(StarshipRepository $repository): JsonResponse
    {
        $collections = $repository->findAll();

        return $this->json($collections);
    }

    #[Route('/api/starships/{id<\d+>}', methods: ['GET'])]
    public function getOne(int $id, StarshipRepository $repository): JsonResponse
    {
        $starship = $repository->findOne($id);

        if (!$starship) {
            throw $this->createNotFoundException();
        }

        return $this->json($starship);
    }
}
