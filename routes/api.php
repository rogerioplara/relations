<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Listar os usuários
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);

// Listar os endereços
Route::get('/addresses', [AddressController::class, 'index']);
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

// Inserir endereços e usuários
Route::post('/addresses', [AddressController::class, 'insert']);
Route::post('/users', [UserController::class, 'insert']);

// Inserir e listar invoices
Route::post('/invoice', [InvoiceController::class, 'insert']);
Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/invoice/{id}', [InvoiceController::class, 'findOne']);
