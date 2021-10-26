<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Produto;

class ProdutoController extends Controller
{
	// 
	public function index(){
		$produtos = Produto::all();
     
		return view('produto.index', ['produtos' =>$produtos]);
	}

	public function create(){
		
     
		return view('produto.create');
	}


	public function store(Request $resquest){
		$produto - new Produto();
		$produto->nome = $resquest->nome;
		$produto->icms = $resquest->icms;
		$produto->ipi = $resquest->ipi;
		$produto->frete = $resquest->frete;
		$produto->precofabrica = $resquest->precofabrica;
		$produto->precocompra = $resquest->precocompra;
		$produto->precovenda = $resquest->precovenda;
		$produto->lucro = $resquest->lucro;
		$produto->desconto = $resquest->desconto;
		$produto->quantidade = $resquest->quantidade;
		$produto->save();
	}

	public function show($id){
		if($id){
			$produtos = Produto::where('id',$id)->get();
		}else{
			$produtos = Produto::all();
		}
		return view('produto.show',['produtos'=>$produtos]);
	}

	public function edit($id){
		$produtos = Produto::find($id);
		return view('produto.edit',['produtos'=>$produtos]);
	}

	public function update(Request $resquest){
		Produto::find($resquest->id)->update($resquest->except('_method'));
		return redirect('produto/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		Produto::findOrFail($id)->delete();
		return redirect('produto/index')->with('msg','produto apagado com sucesso');

	}

}

