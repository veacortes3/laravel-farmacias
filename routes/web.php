<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactFormController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/farmacia', [WelcomeController::class, 'index'])->name('farmacia');

Route::get('contact', [ContactFormController::class, 'form'])->name('contact.form');

Route::post('send-form', [ContactFormController::class, 'send'])->name('contact.send');

Route::get('/productos', [ProductosController::class, 'index'])->name('productos');