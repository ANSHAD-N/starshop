<?php

namespace App\Repository;

use App\Models\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    private function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Starship collection retrieved');

        return [
            new Starship(
                'Star',
                'LM_06_XC',
                'Rofter Woolf',
                'Under taken by JK Rowling', ),
            new Starship(
                'Star',
                'LM_06_XC',
                'Rofter Woolf',
                'Under taken by JK Rowling', ),
            new Starship(
                'Star',
                'LM_06_XC',
                'Rofter Woolf',
                'Under taken by JK Rowling', ),
        ];
    }
}
