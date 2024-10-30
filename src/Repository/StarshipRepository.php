<?php

namespace App\Repository;

use App\Models\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Starship collection retrieved');

        return [
            new Starship(
                1,
                'Star',
                'LM_06_XC',
                'Rofter Woolf',
                'Under taken by JK Rowling', ),
            new Starship(
                2,
                'Star',
                'LM_06_XC',
                'Rofter Woolf',
                'Under taken by JK Rowling', ),
            new Starship(
                3,
                'Star',
                'LM_06_XC',
                'Rofter Woolf',
                'Under taken by JK Rowling', ),
        ];
    }

    public function findOne(int $id): ?Starship
    {
        $collection = $this->findAll();

        foreach ($collection as $item) {
            if ($item->getId() === $id) {
                return $item;
            }
        }

        return null;
    }
}
