<?php

use Dsprog\Http\Controllers\WelcomeController;
use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

return function(App $app) {

    $app->get('/home', function (Request $request, Response $response, array $args) {
        $name = "Daniel Santos";
        return view($response, 'auth.home', compact('name'));
    });

    $app->get('/', [WelcomeController::class, 'index']);
    $app->get('/{name}', [WelcomeController::class, 'show']);
};