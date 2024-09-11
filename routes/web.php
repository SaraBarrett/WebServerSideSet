<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('route.welcome');

Route::get('/cursos/{name}', function ($name) {
    return '<h1>Olá Mundo'.$name.'</h1>';
});

Route::get('/home', [IndexController::class, 'callHome'])->name('home');
Route::get('/users/add_user', [UserController::class, 'addUser'])->name('users.add');
Route::get('/users/all_users', [UserController::class, 'allUsers'])->name('users.all');

Route::fallback(function(){
    return '<h3>Estás perdido, <a href='.route('home').'>voltaaaaa...</a></h3>';
});
