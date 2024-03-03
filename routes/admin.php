<?php

namespace App\Providers;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return "Hola Administrador";
});