<?php

declare(strict_types=1);

use App\Exceptions\NotFoundHttpException;
use App\Webpage;

if (isset($_GET['name']) === false) {
    throw new NotFoundHttpException();
}
$page = new Webpage($_GET['name']);
$pageUrl = $page->getUrl();

    



require view('website');