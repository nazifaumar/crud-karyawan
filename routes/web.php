<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DataController::class, 'index']);
Route::delete('/delete/{id}', [DataController::class, 'destroy']);

Route::get('/create', [DataController::class, 'create']);
Route::post('/create', [DataController::class, 'inputCreate'])->name('inputCreate');

Route::get('/edit/{id}', [DataController::class, 'edit'])->name('editData');
Route::patch('/update/{id}', [DataController::class, 'update'])->name('updateData');


