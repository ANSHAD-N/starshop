<?php

namespace App\Models;

class Starship
{
    public function __construct(
        private int $id,
        private string $name,
        private string $model,
        private string $captain,
        private string $status,
    ) {
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getCaptain(): string
    {
        return $this->captain;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
