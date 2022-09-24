<?php

use App\Http\Controllers\LarappController;
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

Route::get('/', [LarappController::class, 'index']);
Route::post('/', [LarappController::class, 'store']);
Route::get('/show/{id}', [LarappController::class, 'show'])->name('show');
Route::get('/edit/{id}', [LarappController::class, 'edit']);
Route::post('/update/{id}', [LarappController::class, 'update']);
Route::post('/delete/{id}', [LarappController::class, 'destroy']);

