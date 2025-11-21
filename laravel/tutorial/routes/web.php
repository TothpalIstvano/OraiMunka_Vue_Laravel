<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tesztController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teszt', [tesztController::class, 'teszt']);
Route::get('/names', [tesztController::class, 'names']);
//Route::get('/names/create/{name}', [tesztController::class,'namesCreate']);
Route::get('/names/create/{family}/{name}', [tesztController::class,'namesCreate']);
Route::get('/families/create/{name}', [tesztController::class, 'familiesCreate'])->middleware('auth');
Route::post('/names/delete', [tesztController::class, 'namesDelete'])->middleware('auth');

Route::get('/names/manage/surname', [tesztController::class, 'manageSurname'])->middleware('auth');
Route::post('/names/manage/surname/delete', [tesztController::class, 'surnameDelete'])->middleware('auth');
Route::post('/names/manage/surname/new', [tesztController::class, 'newSurname'])->middleware('auth');
Route::post('/names/manage/name/new', [tesztController::class, 'newName'])->middleware('auth');
Auth::routes();

Route::get('/profile', function (){  return view('pages.profile');})->middleware('auth');
Route::post('/profile/changePassword',[UserController::class, 'changePassword'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
