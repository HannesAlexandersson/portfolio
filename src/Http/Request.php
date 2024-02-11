<?php

declare(strict_types=1);

namespace App\Http;
use App\Exceptions\NotFoundHttpException;


class Request
{
  public static function Uri(): string
  {
    if(isset($_SERVER['REQUEST_URI'])){
    $currentUri = preg_replace('/\?.*/', '', trim($_SERVER['REQUEST_URI'], '/'));
    return $currentUri;
    }
    throw new NotFoundHttpException();
    
  } 
}
