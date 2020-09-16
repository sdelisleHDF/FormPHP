<?php

namespace KNPLabs\Routing;

use RuntimeException;

class Router
{
    private $currentURL;

    private $controllers;

    public function __construct()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            $this->currentURL = $_SERVER['REQUEST_URI'];
        } else {
            throw new RuntimeException('The Router can only be used on a server context.');
        }

        $this->controllers = [];
    }

    public function addController(string $path, Controller $controller): void
    {
        $this->controllers[$path] = $controller;
    }

    public function handleRequest(): void
    {
        $currentRoute = $this->currentURL;

        foreach ($this->controllers as $route => $controller) {
            if ($currentRoute === $route) {
                $controller->handleRequest();
              return;
            }
        }

        throw new NotFoundException();
    }
}
