<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SoftguardAccountController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\ReceptoraController;
use App\Http\Controllers\MovilVerificadorController;

/*
| Rutas REST principales (sin duplicados)
*/
Route::resource('customers', CustomerController::class);
Route::resource('customers.contacts', ContactController::class); // nested
Route::resource('customers.softguard_accounts', SoftguardAccountController::class); // nested
Route::resource('equipments', EquipmentController::class);
Route::resource('receptoras', ReceptoraController::class);
Route::resource('movil_verificadores', MovilVerificadorController::class);

/*
| Redirección raíz al formulario de creación
*/
Route::get('/', function () {
    return redirect()->route('customers.create');
});

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
