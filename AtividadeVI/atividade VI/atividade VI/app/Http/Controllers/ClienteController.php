<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\models\Cliente;

class ClienteController extends Controller
{
	// 
	public function index(){
		//$clientes = Cliente::all();
     
		return view('clientes.index');//, ['clientes' =>$clientes]);
	}

	public function create(){
		
     
		return view('clientes.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'nome'=>'required',
		'debito'=>'required',
		'descricao'=>'required',	
		]);
		
		$cliente - new Cliente();
		$cliente->nome = $resquest->nome;
		$cliente->debito= $resquest->debito;
		$cliente->descricao = $resquest->descricao;
		$cliente->save();
	}

	public function show($id){
		if($id){
			$cliente = Cliente::where('id',$id)->get();
		}else{
			$cliente = Cliente::all();
		}
		return view('clientes.show',['clientes'=>$cliente]);
	}

	public function edit($id){
		$cliente = Cliente::find($id);
		return view('clientes.edit',['cliente'=>$cliente]);
	}

	public function update(Request $resquest){
		Cliente::find($resquest->id)->update($resquest->except('_method'));
		return redirect('clientes/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		Cliente::findOrFail($id)->delete();
		return redirect('clientes/index')->with('msg','cliente apagado com sucesso');

	}
}

