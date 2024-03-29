<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jenkins', function () {
    return 'Jenkins build success with webhook test poll push one';
});
Route::get('/sonar', function () {
    return 'Sonar build success with webhook test poll push one';
});
