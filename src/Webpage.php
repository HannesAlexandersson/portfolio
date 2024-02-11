<?php

declare(strict_types=1);

namespace App;

class Webpage
{
    public function __construct(        
        public string $name
    ) {
    }

    public function getUrl(): string
    {
        return sprintf('https://www.alexanderochson.se/%s/', strtolower($this->name));
    }
}