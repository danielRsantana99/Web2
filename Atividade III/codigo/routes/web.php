<?php

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

Route::get('/', function () {
    return view('disciplina');
});


Route::get('/aluno', function () {
    return view('aluno');
});


/*Route::get('/aluno', function () {
	$nome = "fabio";
    return view('aluno',['nome' => $nome]);
});

Route::get('/parametros', function () {
	$nome = "fabio";
	$idade = 30;
    return view('aluno',
    [
    	'pnome' => $nome,
    	'pidade' => $idade,
    	'pprofissão' => "programador"
    ]);
});

//parametros opcional
Route::get('/ipopcional/{id}', function ($id) {
    return view('aluno',[ 'id' => $id]);
});
*/
Route::get('/index', [ClienteController::class, 'index']);
Route::get('/create',[ClienteController::class, 'create']); 
Route::post('/store', [ClienteController::class, 'store']); 

Route::get('/fornecedorindex', [FornecedorController::class, 'index']);
Route::get('/fornecedorcreate',[FornecedorController::class, 'create']); 
Route::post('/fornecedorstore', [FornecedorController::class, 'store']); 