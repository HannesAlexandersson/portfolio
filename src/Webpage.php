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
        //strtolower($this->name) We dont want lowercases
        return sprintf('https://www.alexanderochson.se/%s/', $this->name);
    }
}