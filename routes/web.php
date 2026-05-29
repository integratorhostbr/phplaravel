<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'appName' => config('app.name'),
        'deployTime' => now()->format('d/m/Y H:i:s'),
        'phpVersion' => PHP_VERSION,
    ]);
});
