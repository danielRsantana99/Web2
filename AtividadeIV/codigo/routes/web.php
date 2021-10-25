<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItensvendaController;
use App\Http\Controllers\ItensentradaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;

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

Route::get('/index', [ClienteController::class, 'index']);
Route::get('/create',[ClienteController::class, 'create']); 
Route::post('/store', [ClienteController::class, 'store']); 
Route::get('/clientes/show/{id}',[ClienteController::class, 'show']); 
Route::get('/clientes/edit/{id}',[ClienteController::class, 'edit']); 
Route::put('/clientes/update/{id}',[ClienteController::class, 'update']); 
Route::delete('/clientes/{id}',[ClienteController::class, 'destroy']); 


Route::get('/fornecedorindex', [FornecedorController::class, 'index']);
Route::get('/fornecedorcreate',[FornecedorController::class, 'create']); 
Route::post('/fornecedorstore', [FornecedorController::class, 'store']); 
Route::get('/fornecedores/show/{id}',[FornecedorController::class, 'show']); 
Route::get('/fornecedores/edit/{id}',[FornecedorController::class, 'edit']); 
Route::put('/fornecedores/update/{id}',[FornecedorController::class, 'update']); 

Route::get('/entradaindex', [EntradaController::class, 'index']);
Route::get('/entradacreate',[EntradaController::class, 'create']); 
Route::post('/entradastore', [EntradaController::class, 'store']); 
Route::get('/entradas/show/{id}',[EntradaController::class, 'show']); 
Route::get('/entradas/edit/{id}',[EntradaController::class, 'edit']); 
Route::put('/entradas/update/{id}',[EntradaController::class, 'update']); 

Route::get('/itensentradaindex', [ItensentradaController::class, 'index']);
Route::get('/itensentradacreate',[ItensentradaController::class, 'create']); 
Route::post('/itensentradastore', [ItensentradaController::class, 'store']); 
Route::get('/itensentrada/show/{id}',[ItensentradaController::class, 'show']); 
Route::get('/itensentrada/edit/{id}',[ItensentradaController::class, 'edit']); 
Route::put('/itensentrada/update/{id}',[ItensentradaController::class, 'update']); 

Route::get('/itensvendaindex', [ItensvendaController::class, 'index']);
Route::get('/itensvendacreate',[ItensvendaController::class, 'create']); 
Route::post('/itensvendastore', [ItensvendaController::class, 'store']); 
Route::get('/itensvenda/show/{id}',[ItensvendaController::class, 'show']); 
Route::get('/itensvenda/edit/{id}',[ItensvendaController::class, 'edit']); 
Route::put('/itensvenda/update/{id}',[ItensvendaController::class, 'update']); 

Route::get('/vendaindex', [VendaController::class, 'index']);
Route::get('/vendacreate',[VendaController::class, 'create']); 
Route::post('/vendastore', [VendaController::class, 'store']); 
Route::get('/venda/show/{id}',[VendaController::class, 'show']); 
Route::get('/venda/edit/{id}',[VendaController::class, 'edit']); 
Route::put('/venda/update/{id}',[VendaController::class, 'update']); 

Route::get('/produtoindex', [ProdutoController::class, 'index']);
Route::get('/produtocreate',[ProdutoController::class, 'create']); 
Route::post('/produtostore', [ProdutoController::class, 'store']); 
Route::get('/produto/show/{id}',[ProdutoController::class, 'show']); 
Route::get('/produto/edit/{id}',[ProdutoController::class, 'edit']); 
Route::put('/produto/update/{id}',[ProdutoController::class, 'update']); 
