<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\TaskController;
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

Route::post('users/add-user', [UserController::class, 'createUser'])->name('user.create');

Route::get('/users/view/{id}', [UserController::class, 'viewUser'])->name('users.view');

Route::get('/users/delete/{id}', [UserController::class, 'deleteUser'])->name('users.delete');

Route::get('/tasks/all_tasks', [TaskController::class, 'allTasks'])->name('tasks.all');

Route::get('/tasks/view/{id}', [TaskController::class, 'viewTask'])->name('tasks.view');

Route::get('/tasks/delete/{id}', [TaskController::class, 'deleteTask'])->name('tasks.delete');




Route::fallback(function(){
    return '<h3>Estás perdido, <a href='.route('home').'>voltaaaaa...</a></h3>';
});
