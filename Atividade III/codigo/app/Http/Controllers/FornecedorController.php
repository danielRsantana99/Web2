<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Fornecedor;

class ClienteController extends Controller
{
	// 
	public function index(){
		$Fornecedores = Fornecedor::all();
     
		return view('fornecedores.index', ['fornecedores' =>$Fornecedores]);
	}

	public function create(){
		
     
		return view('fornecedores.create');
	}


	public function store(Request $resquest){
		$Fornecedor - new Fornecedor();
		$Fornecedor->nome = $resquest->nome;
		$Fornecedor->cnpj= $resquest->cnpj;
		$Fornecedor->endereco= $resquest->endereco;
		$cliente->save();
	}



}



