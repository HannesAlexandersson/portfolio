<?php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';
use App\Exceptions\NotFoundHttpException;
use App\Http\Request;
use App\Http\Router;


try {
    $router = new Router([
        '/' => __DIR__ . '/src/Controllers/startPage.php',
        '/collection' => __DIR__ . '/src/Controllers/collection.php',
        '/cv' => __DIR__ . '/src/Controllers/curriculum.php',
        '/story' => __DIR__ .'/src/Controllers/myStory.php',
        '/contact' => __DIR__ .'/src/Controllers/contact.php',
        '/extWebPage' => __DIR__ .'/src/Controllers/getPage.php',
        '/submit_form' => __DIR__ .'/src/Controllers/submitForm.php'
    ]);
    
    $controllerFile = $router->direct(Request::Uri());
   
    require $controllerFile;
     
} catch (NotFoundHttpException $e) {
    require view('404');
}