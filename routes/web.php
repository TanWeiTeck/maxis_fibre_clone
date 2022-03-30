<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FibreplanController;


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

Route::get('/fibre', [FibreplanController::class,'index']);
Route::get('/apply', [FibreplanController::class, 'apply']);
Route::post('/apply', [FibreplanController::class, 'store']);