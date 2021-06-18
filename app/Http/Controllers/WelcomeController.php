<?php

namespace Dsprog\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

class WelcomeController
{
    public function index($request, $response) {
        $response->getBody()->write('Olá');
        return $response;
    }

    public function show($request, $response, $name) {
        $response->getBody()->write('Olá '.$name);
        return $response;
    }
}