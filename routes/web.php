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
use \App\Http\Controllers\RollerController;
use \App\Http\Controllers\RoleController;
use \App\Http\Controllers\UserController;




Route::get('/menu/getall', [MenuController::class , 'getAll']);
Route::post('/menu/create', [MenuController::class , 'create']);
Route::post('/menu/delete', [MenuController::class , 'delete']);


Route::get('/rollers/getall', [RollerController::class , 'getAll']);
Route::post('/rollers/create', [RollerController::class , 'create']);
Route::post('/rollers/delete', [RollerController::class , 'delete']);


Route::get('/roles/getall', [RoleController::class , 'getAll']);
Route::post('/roles/create', [RoleController::class , 'create']);
Route::post('/roles/delete', [RoleController::class , 'delete']);


Route::get('/users/getall', [UserController::class , 'getAll']);
Route::post('/users/create', [UserController::class , 'create']);
Route::post('/users/delete', [UserController::class , 'delete']);








Route::get('/', function () {
    return [
        'message' => 'welcome to the server'
    ];
});
