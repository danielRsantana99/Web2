<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Cliente;

class ClienteController extends Controller
{
	// 
	public function index(){
		$clientes = Cliente::all();
     
		return view('clientes.index', ['clientes' =>$clientes]);
	}

	public function create(){
		
     
		return view('clientes.create');
	}


	public function store(Request $resquest){
		$cliente - new Cliente();
		$cliente->nome = $resquest->nome;
		$cliente->debito= $resquest->debito;
		$cliente->descricao = $resquest->descricao;
		$cliente->save();
	}



}



