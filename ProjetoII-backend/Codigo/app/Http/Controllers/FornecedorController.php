<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
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
		$resquest->validate([
		'nome'=>'required',
		'telefone'=>'required',
		'cnpj'=>'required',
		'endereco'=>'required',	
		]);
		$Fornecedor = new fornecedor();
		$Fornecedor->nome = $resquest->nome;
		$Fornecedor->telefone = $resquest->telefone;
		$Fornecedor->cnpj= $resquest->cnpj;
		$Fornecedor->endereco= $resquest->endereco;
		$Fornecedor->save();
		return redirect('fornecedores/')->with('msg','Cadastro realizado com sucesso');
	}

	public function show($id){
		if($id){
			$Fornecedor = fornecedor::where('id',$id)->get();
		}else{
			$Fornecedor = fornecedor::all();
		}
		return view('fornecedores.show',['fornecedores'=>$Fornecedor]);
	}

	public function edit($id){
		$Fornecedor = fornecedor::find($id);
		return view('fornecedores.edit',['fornecedores'=>$Fornecedor]);
	}

	public function update(Request $resquest){
		$resquest->validate([
		'nome'=>'required',
		'telefone'=>'required',
		'cnpj'=>'required',
		'endereco'=>'required',	
		]);
		fornecedor::find($resquest->id)->update($resquest->except('_method'));
		return redirect('fornecedores/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		Ffornecedor::findOrFail($id)->delete();
		return redirect('fornecedores/index')->with('msg','Fornecedor apagado com sucesso');

	}

}



