<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'projects.index');

Route::view('/project/{project}', 'projects.show')->name('projects.show');
