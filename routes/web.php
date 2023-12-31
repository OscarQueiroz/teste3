<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
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

 
Route::get('/produto', [ProdutoController::class, 'index']);
Route::get('/produto/create',[ProdutoController::class,'create']);
Route::get('/produto/{id}',[ProdutoController::class,'show']);
Route::get('/produto/{id}/edit',[ProdutoController::class,'edit']);
Route::get('/produto/{id}/destroy',[ProdutoController::class,'destroy']);