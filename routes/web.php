<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\returnArgument;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function(){

    return view('auth.dashboard');
    
})->middleware('auth'); 