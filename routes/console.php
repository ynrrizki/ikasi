<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Route::get('/artisan/storage', function () {
    $command = 'storage:link';
    $result = Artisan::call($command);
    return Artisan::output();
});
