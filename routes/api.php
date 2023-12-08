<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Listar os usuários
Route::get('/user', [UserController::class, 'index']);

// Listar os endereços
Route::get('/addresses', [AddressController::class, 'index']);
