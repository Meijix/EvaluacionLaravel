<?php

use App\Livewire\Customers;
use App\Livewire\ViewCustomer;
use App\Livewire\CreateCustomer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');})->name('principal');

//Crear un cliente
Route::get('/customers/create', CreateCustomer::class);
//Listar clientes
Route::get('/customers', Customers::class);
//Ver un cliente
Route::get('/customers/{customer}', ViewCustomer::class);
//Tengo que crear el controlador de Customers
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');

//Borrar un cliente
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');


