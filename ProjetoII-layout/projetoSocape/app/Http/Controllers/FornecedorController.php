<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Fornecedor;

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
		'cnpj'=>'required',
		'endereco'=>'required',	
		]);
		$Fornecedor - new Fornecedor();
		$Fornecedor->nome = $resquest->nome;
		$Fornecedor->cnpj= $resquest->cnpj;
		$Fornecedor->endereco= $resquest->endereco;
		$cliente->save();
	}

	public function show($id){
		if($id){
			$fornecedores = Fornecedor::where('id',$id)->get();
		}else{
			$fornecedores = Fornecedor::all();
		}
		return view('fornecedores.show',['fornecedores'=>$fornecedores]);
	}

	public function edit($id){
		$fornecedores = Fornecedor::find($id);
		return view('fornecedores.edit',['fornecedores'=>$fornecedores]);
	}

	public function update(Request $resquest){
		$resquest->validate([
		'nome'=>'required',
		'cnpj'=>'required',
		'endereco'=>'required',	
		]);
		Fornecedor::find($resquest->id)->update($resquest->except('_method'));
		return redirect('fornecedores/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		Fornecedor::findOrFail($id)->delete();
		return redirect('fornecedores/index')->with('msg','Fornecedor apagado com sucesso');

	}

}



