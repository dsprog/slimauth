<?php
use Dsprog\Support\Route;

Route::get('/', 'WelcomeController@index');
Route::get('/welcome/{name}', 'WelcomeController@show');