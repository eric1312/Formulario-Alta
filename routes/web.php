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
