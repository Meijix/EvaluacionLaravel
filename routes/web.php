<?php


use App\Http\Livewire\CreateCustomer;
use App\Http\Livewire\Customers;
use App\Http\Livewire\ViewCustomer;
use App\Http\Livewire\EditCustomer;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');})->name('principal');

Route::get('/customers', Customers::class);//->name('customers.index');
Route::get('/customers/create', CreateCustomer::class);//->name('customers.create');
Route::get('/customers/{id}', ViewCustomer::class);//->name('customers.show');
Route::get('/customers/{id}/edit', EditCustomer::class)->name('customers.edit');
