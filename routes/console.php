<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('app:status', function () {
    $this->info('Aplicativo Laravel rodando corretamente no ICP.');
})->purpose('Mostra o status simples do aplicativo');
