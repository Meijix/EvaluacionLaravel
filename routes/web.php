<?php

use App\Livewire\Customers;
use App\Livewire\ViewCustomer;
use App\Livewire\CreateCustomer;
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

Route::get('/customers/create', CreateCustomer::class);
Route::get('/customers', Customers::class);
Route::get('/customers/{customer}', ViewCustomer::class);
