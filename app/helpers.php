<?php

use Psr\Http\Message\ResponseInterface as Response;
use Jenssegers\Blade\Blade;
/**
 * Global Helper Functions
 */
if(! file_exists('view')) {
    function view(Response $response, $template, $with = []) {
        $cache = __DIR__ . '/../cache';
        $views = __DIR__ . '/../resources/views';

        $blade = (new Blade($views, $cache))->make($template, $with);

        $response->getBody()->write($blade->render());
        return $response;
    }  
}