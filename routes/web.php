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


use \App\Http\Controllers\MenuController;


Route::get('/menu/getall', [MenuController::class , 'getall']);

Route::post('/menu/create', [MenuController::class , 'create']);

Route::post('/menu/delete', [MenuController::class , 'delete']);


Route::get('/', function () {
    return [
        'message' => 'welcome to the server'
    ];
});
