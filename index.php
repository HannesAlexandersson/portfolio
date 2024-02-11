<?php

declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';
use App\Exceptions\NotFoundHttpException;
use App\Http\Request;
use App\Http\Router;
try {
    $router = new Router([
        '' => __DIR__ . '/src/Controllers/startPage.php', //qeury needs to be empty, no index.php
        '/webPage' => __DIR__ . '/src/Controllers/getPage.php',
    ]);
    $controllerFile = $router->direct(Request::Uri());
    if ($controllerFile === null) {
        throw new NotFoundHttpException("index");
    }else {
        require $controllerFile;
    }    
} catch (NotFoundHttpException $e) {
    require view('404');
}