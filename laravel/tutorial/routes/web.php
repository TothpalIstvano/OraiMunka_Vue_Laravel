<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tesztController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teszt', [tesztController::class, 'teszt']);
Route::get('/names', [tesztController::class, 'names']);
//Route::get('/names/create/{name}', [tesztController::class,'namesCreate']);
Route::get('/names/create/{family}/{name}', [tesztController::class,'namesCreate']);
Route::get('/families/create/{name}', [tesztController::class, 'familiesCreate']);