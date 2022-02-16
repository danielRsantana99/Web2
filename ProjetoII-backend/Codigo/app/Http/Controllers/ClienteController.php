<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
	// 
	public function index(){
		$Cliente = cliente::all();
     
		return view('clientes.index',['cliente' =>$Cliente]);
	}

	public function create(){
		
     
		return view('clientes/create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'nome'=>'required',
		'telefone'=>'required',
		'cnpj'=>'required',	
		'cpf'=>'required',	
		'debito'=>'required',		
		]);
		
		$Cliente = new cliente();
		$Cliente->nome = $resquest->nome;
		$Cliente->telefone= $resquest->telefone;
		$Cliente->cnpj = $resquest->cnpj;
		$Cliente->cpf = $resquest->cpf;
		$Cliente->debito = $resquest->debito;
		$Cliente->save();

		return redirect('clientes.create')->with('msg','cliente inserido com sucesso');
	}


	public function update(Request $resquest){
		$resquest->validate([
		'nome'=>'required',
		'telefone'=>'required',
		'cnpj'=>'required',	
		'cpf'=>'required',	
		'debito'=>'required',		
		]);
		$cliente = Cliente::findOrFail($resquest->id);
		$cliente->update([
			'nome'=>$resquest->nome,
			'telefone'=>$resquest->telefone,
			'cnpj'=>$resquest->cnpj,
			'cpf'=>$resquest->cpf,
			'debito'=>$resquest->debito,
		]);
		
		return redirect('clientes/')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		if($id){
			$Cliente = Cliente::where('id',$id)->get();
		}else{
			$Cliente = Cliente::all();
		}
		return view('clientes.show',['cliente'=>$Cliente]);
	}

	public function edit($id){
		$Cliente = cliente::find($id);
		return view('clientes/edit',['cliente'=>$Cliente]);
	}


	public function destroy($id){
		cliente::findOrFail($id)->delete();

		return redirect('clientes/')->with('msg','cliente apagado com sucesso');

	}
}

