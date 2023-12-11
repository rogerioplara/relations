<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Listar os usuários
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);

// Listar os endereços
Route::get('/addresses', [AddressController::class, 'index']);
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);
