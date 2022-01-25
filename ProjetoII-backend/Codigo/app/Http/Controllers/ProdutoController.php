<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
	// 
	public function index(){
		$Produto = produto::all();
     
		return view('produto.index', ['produto' =>$Produto]);
	}

	public function create(){
		
     
		return view('produto.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'id_carro'=>'required',
		'id_motor'=>'required',
		'id_valvula'=>'required',
		'id_categoria'=>'required',
		'id_marca'=>'required',
		'id_fabricacao'=>'required',
		'id_localizacao'=>'required',
		'icms'=>'required',
		'ipi'=>'required',	
		'frete'=>'required',
		'valornafabrica'=>'required',
		'valordecompra'=>'required',	
		'valorvenda'=>'required',
		'lucro'=>'required',
		'unidade'=>'required',	
		'quantidade'=>'required',
		]);
		$Produto - new produto();
		$Produto->id_carro = $resquest->id_carro;
		$Produto->id_motor = $resquest->id_motor;
		$Produto->id_valvula = $resquest->id_valvula;
		$Produto->id_categoria = $resquest->id_categoria;
		$Produto->id_marca = $resquest->id_marca;
		$Produto->id_fabricacao = $resquest->id_fabricacao;
		$Produto->id_localizacao = $resquest->id_localizacao;
		$Produto->icms = $resquest->icms;
		$Produto->ipi = $resquest->ipi;
		$Produto->frete = $resquest->frete;
		$Produto->valornafabrica = $resquest->valornafabrica;
		$Produto->valordecompra = $resquest->valordecompra;
		$Produto->valorvenda = $resquest->valorvenda;
		$Produto->lucro = $resquest->lucro;
		$Produto->unidade = $resquest->unidade;
		$Produto->quantidade = $resquest->quantidade;
		$Produto->save();
	}

	public function show($id){
		if($id){
			$Produto = produto::where('id',$id)->get();
		}else{
			$Produto = produto::all();
		}
		return view('produto.show',['produtos'=>$Produto]);
	}

	public function edit($id){
		$Produto = produto::find($id);
		return view('produto.edit',['produtos'=>$Produto]);
	}

	public function update(Request $resquest){
		$resquest->validate([
		'id_carro'=>'required',
		'id_motor'=>'required',
		'id_valvula'=>'required',
		'id_categoria'=>'required',
		'id_marca'=>'required',
		'id_fabricacao'=>'required',
		'id_localizacao'=>'required',
		'nome'=>'required',
		'icms'=>'required',
		'ipi'=>'required',	
		'frete'=>'required',
		'valornafabrica'=>'required',
		'valordecompra'=>'required',	
		'valorvenda'=>'required',
		'lucro'=>'required',
		'unidade'=>'required',	
		'quantidade'=>'required',
		]);
		produto::find($resquest->id)->update($resquest->except('_method'));
		return redirect('produto/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		produto::findOrFail($id)->delete();
		return redirect('produto/index')->with('msg','produto apagado com sucesso');

	}

}

