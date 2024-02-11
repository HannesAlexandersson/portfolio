<?php

declare(strict_types=1);

if (!function_exists('view')) {
    function view(string $name): string
    {
        return sprintf('%s/Views/%s.view.php', __DIR__, $name);
    }
}