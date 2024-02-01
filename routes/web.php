<?php

use App\Models\Services;
use App\Http\Controllers\ServiesController;
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
Route::get('/Services',[ServiesController::class, 'index'])->name('services.index');
Route::get('/Services/create',[ServiesController::class, 'create'])->name('services.create');
Route::post('/Services',[ServiesController::class, 'save'])->name('services.save');



