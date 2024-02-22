<?php

declare(strict_types=1);

namespace App\Http;

use App\Exceptions\NotFoundHttpException;

class Router
{
    public function __construct(
        private array $routes
    ) {
        
    }

    public function direct(string $uri): string
    {       
        
        if (array_key_exists($uri, $this->routes)) {
            echo $this->routes[$uri];
            return $this->routes[$uri];
        }

        throw new NotFoundHttpException('No route defined for this URI.');
    }
}