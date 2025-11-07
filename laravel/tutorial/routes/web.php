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
Route::post('/names/delete', [tesztController::class, 'namesDelete']);

Route::get('/names/manage/surname', [tesztController::class, 'manageSurname']);
Route::post('/names/manage/surname/delete', [tesztController::class, 'surnameDelete']);
Route::post('/names/manage/surname/new', [tesztController::class, 'newSurname']);
Route::post('/names/manage/name/new', [tesztController::class, 'newName']);