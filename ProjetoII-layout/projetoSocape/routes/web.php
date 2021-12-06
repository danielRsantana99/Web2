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

Route::prefix('carro')->group (function (){

	Route::get('/', [CarroController::class, 'index'])->name('.index');
	Route::get('/create',[CarroController::class, 'create'])->name('carro.create'); 
	Route::post('/store', [CarroController::class, 'store'])->name('carro.store');
	Route::get('/show/{id}',[CarroController::class, 'show'])->name('carro.show'); 
	Route::get('/edit/{id}',[CarroController::class, 'edit'])->name('carro.edit'); 
	Route::put('/update/{id}',[CarroController::class, 'update'])->name('carro.update'); 
	Route::delete('/destroy/{id}',[CarroController::class, 'destroy'])->name('carro.destroy');
});


Route::prefix('categoria')->group (function (){

	Route::get('/', [CategoriaController::class, 'index'])->name('categoria.index');
	Route::get('/create',[CategoriaController::class, 'create'])->name('categoria.create');
	Route::post('/store', [CategoriaController::class, 'store'])->name('categoria.store');
	Route::get('/show/{id}',[CategoriaController::class, 'show'])->name('categoria.show'); 
	Route::get('/edit/{id}',[CategoriaController::class, 'edit'])->name('categoria.edit'); 
	Route::put('/update/{id}',[CategoriaController::class, 'update'])->name('categoria.update'); 
	Route::delete('/destroy/{id}',[CategoriaController::class, 'destroy'])->name('categoria.destroy');
});


Route::prefix('fabricação')->group (function (){

	Route::get('/', [FabricacaoController::class, 'index'])->name('fabricação.index');
	Route::get('/create',[FabricacaoController::class, 'create'])->name('fabricação.create'); 
	Route::post('/store', [FabricacaoController::class, 'store'])->name('fabricação.store');
	Route::get('/show/{id}',[FabricacaoController::class, 'show'])->name('fabricação.show'); 
	Route::get('/edit/{id}',[FabricacaoController::class, 'edit'])->name('fabricação.edit'); 
	Route::put('/update/{id}',[FabricacaoController::class, 'update'])->name('fabricação.update'); 
	Route::delete('/destroy/{id}',[FabricacaoController::class, 'destroy'])->name('fabricação.destroy');
});


Route::prefix('localização')->group (function (){

	Route::get('/', [LocalizacaoController::class, 'index'])->name('localização.index');
	Route::get('/create',[LocalizacaoController::class, 'create'])->name('localização.create'); 
	Route::post('/store', [LocalizacaoController::class, 'store'])->name('localização.store');
	Route::get('/show/{id}',[LocalizacaoController::class, 'show'])->name('localização.show'); 
	Route::get('/edit/{id}',[LocalizacaoController::class, 'edit'])->name('localização.edit'); 
	Route::put('/update/{id}',[LocalizacaoController::class, 'update'])->name('localização.update'); 
	Route::delete('/destroy/{id}',[LocalizacaoController::class, 'destroy'])->name('localização.destroy');
});


Route::prefix('marca')->group (function (){

	Route::get('/', [MarcaController::class, 'index'])->name('marca.index');
	Route::get('/create',[MarcaController::class, 'create'])->name('marca.create'); 
	Route::post('/store', [MarcaController::class, 'store'])->name('marca.store');
	Route::get('/show/{id}',[MarcaController::class, 'show'])->name('marca.show'); 
	Route::get('/edit/{id}',[MarcaController::class, 'edit'])->name('marca.edit'); 
	Route::put('/update/{id}',[MarcaController::class, 'update'])->name('marca.update'); 
	Route::delete('/destroy/{id}',[MarcaController::class, 'destroy'])->name('marca.destroy');
});


Route::prefix('motor')->group (function (){

	Route::get('/', [MotorController::class, 'index'])->name('motor.index');
	Route::get('/create',[MotorController::class, 'create'])->name('motor.create'); 
	Route::post('/store', [MotorController::class, 'store'])->name('motor.store');
	Route::get('/show/{id}',[MotorController::class, 'show'])->name('motor.show'); 
	Route::get('/edit/{id}',[MotorController::class, 'edit'])->name('motor.edit'); 
	Route::put('/update/{id}',[MotorController::class, 'update'])->name('motor.update'); 
	Route::delete('/destroy/{id}',[MotorController::class, 'destroy'])->name('motor.destroy');
});


Route::prefix('valvula')->group (function (){

	Route::get('/', [ValvulaController::class, 'index'])->name('valvula.index');
	Route::get('/create',[ValvulaController::class, 'create'])->name('valvula.create'); 
	Route::post('/store', [ValvulaController::class, 'store'])->name('valvula.store');
	Route::get('/show/{id}',[ValvulaController::class, 'show'])->name('valvula.show'); 
	Route::get('/edit/{id}',[ValvulaController::class, 'edit'])->name('valvula.edit'); 
	Route::put('/update/{id}',[ValvulaController::class, 'update'])->name('valvula.update'); 
	Route::delete('/destroy/{id}',[ValvulaController::class, 'destroy'])->name('valvula.destroy');
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