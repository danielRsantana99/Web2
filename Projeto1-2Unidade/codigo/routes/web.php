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

Route::get('/',function(){
	return view('layouts.main');
});


Route::prefix('clientes')->group (function (){

	Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
	Route::get('/create',[ClienteController::class, 'create'])->name('clientes.create'); 
	Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');
	Route::get('/show/{id}',[ClienteController::class, 'show'])->name('clientes.show'); 
	Route::get('/edit/{id}',[ClienteController::class, 'edit'])->name('clientes.edit'); 
	Route::put('/update/{id}',[ClienteController::class, 'update'])->name('clientes.update'); 
	Route::delete('/destroy/{id}',[ClienteController::class, 'destroy'])->name('clientes.destroy');
});


Route::prefix('fornecedores')->group (function (){
	Route::get('/', [FornecedorController::class, 'index'])->name('fornecedores.index');
	Route::get('/create',[FornecedorController::class, 'create'])->name('fornecedores.create'); 
	Route::post('/store', [FornecedorController::class, 'store'])->name('fornecedores.store'); 
	Route::get('/show/{id}',[FornecedorController::class, 'show'])->name('fornecedores.show');
	Route::get('/edit/{id}',[FornecedorController::class, 'edit'])->name('fornecedores.edit'); 
	Route::put('/update/{id}',[FornecedorController::class, 'update'])->name('fornecedores.update');
	Route::delete('/destroy/{id}',[FornecedorController::class, 'destroy'])->name('fornecedores.destroy');

});

Route::prefix('entradas')->group (function (){
	Route::get('/', [EntradaController::class, 'index'])->name('entradas.index'); 
	Route::get('/create',[EntradaController::class, 'create'])->name('entradas.create');  
	Route::post('/store', [EntradaController::class, 'store'])->name('entradas.store'); 
	Route::get('/show/{id}',[EntradaController::class, 'show'])->name('entradas.show'); 
	Route::get('/edit/{id}',[EntradaController::class, 'edit'])->name('entradas.edit'); 
	Route::put('/update/{id}',[EntradaController::class, 'update'])->name('entradas.update'); 
	Route::delete('/destroy/{id}',[EntradaController::class, 'destroy'])->name('entradas.destroy');

});
Route::prefix('itensentrada')->group (function (){
	Route::get('/', [ItensentradaController::class, 'index'])->name('itensentrada.index'); 
	Route::get('/create',[ItensentradaController::class, 'create'])->name('itensentrada.create'); 
	Route::post('/store', [ItensentradaController::class, 'store'])->name('itensentrada.store'); 
	Route::get('/show/{id}',[ItensentradaController::class, 'show'])->name('itensentrada.show'); 
	Route::get('/edit/{id}',[ItensentradaController::class, 'edit'])->name('itensentrada.edit'); 
	Route::put('/update/{id}',[ItensentradaController::class, 'update'])->name('itensentrada.update');  
	Route::delete('/destroy/{id}',[ItensentradaController::class, 'destroy'])->name('itensentrada.destroy');

});

Route::prefix('itensvenda')->group (function (){
	Route::get('/', [ItensvendaController::class, 'index'])->name('itensvenda.index'); 
	Route::get('/create',[ItensvendaController::class, 'create'])->name('itensvenda.create'); 
	Route::post('/store', [ItensvendaController::class, 'store'])->name('itensvenda.store'); 
	Route::get('/show/{id}',[ItensvendaController::class, 'show'])->name('itensvenda.show'); 
	Route::get('/edit/{id}',[ItensvendaController::class, 'edit'])->name('itensvenda.edit'); 
	Route::put('/update/{id}',[ItensvendaController::class, 'update'])->name('itensvenda.update'); 
	Route::delete('/destroy/{id}',[ItensvendaController::class, 'destroy'])->name('itensvenda.destroy');

});

Route::prefix('venda')->group (function (){

	Route::get('/', [VendaController::class, 'index'])->name('venda.index'); 
	Route::get('/create',[VendaController::class, 'create'])->name('venda.create'); 
	Route::post('/store', [VendaController::class, 'store'])->name('venda.store'); 
	Route::get('/show/{id}',[VendaController::class, 'show'])->name('venda.show'); 
	Route::get('/edit/{id}',[VendaController::class, 'edit'])->name('venda.edit'); 
	Route::put('/update/{id}',[VendaController::class, 'update'])->name('venda.update'); 
	Route::delete('/destroy/{id}',[VendaController::class, 'destroy'])->name('venda.destroy');

});

Route::prefix('produto')->group (function (){
	Route::get('/', [ProdutoController::class, 'index'])->name('produto.index'); 
	Route::get('/create',[ProdutoController::class, 'create'])->name('produto.create'); 
	Route::post('/store', [ProdutoController::class, 'store'])->name('produto.store'); 
	Route::get('/show/{id}',[ProdutoController::class, 'show'])->name('produto.show'); 
	Route::get('/edit/{id}',[ProdutoController::class, 'edit'])->name('produto.edit'); 
	Route::put('/update/{id}',[ProdutoController::class, 'update'])->name('produto.update'); 
	Route::delete('/destroy/{id}',[ProdutoController::class, 'destroy'])->name('produto.destroy');

});