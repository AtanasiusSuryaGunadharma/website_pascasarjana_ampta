<?php

declare(strict_types=1);

namespace App\Core;

final class Application
{
    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function router(): Router
    {
        return $this->router;
    }

    public function run(): void
    {
        $this->router->dispatch(
            $_SERVER['REQUEST_METHOD'] ?? 'GET',
            $_SERVER['REQUEST_URI'] ?? '/'
        );
    }
}
