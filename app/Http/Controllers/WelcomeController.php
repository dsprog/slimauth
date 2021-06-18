<?php

namespace Dsprog\Http\Controllers;

use Dsprog\Support\View;

class WelcomeController
{
    public function index(View $view, $response) {

        return $view('auth.home',[
            'name' => 'HomeController:index Hello Word'
        ]);
    }

    public function show(View $view, $response, $name) {
        return $view('auth.home',[
            'name' => 'HomeController:index Hello Word - '. $name
        ]);
    }
}