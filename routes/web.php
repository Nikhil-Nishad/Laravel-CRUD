<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', [CrudController::class, 'index']);
Route::get('/create', [CrudController::class, 'create']);
Route::post('/store', [CrudController::class, 'store']);
Route::get('/delete/{id}', [CrudController::class, 'delete']);
Route::get('/edit/{id}', [CrudController::class, 'edit']);
Route::put('/pushUpdate/{id}', [CrudController::class, 'pushUpdate']);