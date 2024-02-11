<?php

declare(strict_types=1);

use App\Exceptions\NotFoundHttpException;
use App\Webpage;

if (isset($_GET['id']) === false) {
    throw new NotFoundHttpException();
}
$page = new Webpage($_GET['id']);
$pageUrl = $page->getUrl();

    



require view('website');