<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

$app = AppFactory::create();

$app->get('/about', function ($request, $response) {
    $phpView = new PhpRenderer('../templates');
    return $phpView->render($response, 'about.phtml',$test);
 });
