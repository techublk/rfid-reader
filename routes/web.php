<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfigurationController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/configuration', [ConfigurationController::class, 'index'])->name('configuration.home');

Route::get('/configuration/{id}', [ConfigurationController::class, 'show'])->name('configuration.show');

Route::post('/configuration/save/1,2', [ConfigurationController::class, 'update'])->name('configuration.update');


