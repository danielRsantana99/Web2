<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensvenda;

class ItensvendaController extends Controller
{
	// 
	public function index(){
		$Itensvenda = itensvenda::all();
     
		return view('itensvendas.index', ['itensvenda' =>$Itensvenda]);
	}

	public function create(){
		return view('itensvendas.create');
	}


	public function store(Request $resquest){
		$Itensvenda - new itensvenda();
		$resquest->validate([
		'id_produto'=>'required',
		'id_venda'=>'required',
		'quantidade'=>'required',
		'valorvenda'=>'required',	
		'desconto'=>'required',	
		'lucro'=>'required',	
		]);
		$Itensvenda - new itensvenda();
		$Itensvenda->id_produto = $resquest->id_produto;
		$Itensvenda->id_venda = $resquest->id_venda;
		$Itensvenda->quantidade = $resquest->quantidade;
		$Itensvenda->valorvenda = $resquest->valorvenda;
		$Itensvenda->desconto = $resquest->desconto;
		$Itensvenda->lucro = $resquest->lucro;
		$Itensvenda->save();
	}

	public function show($id){
		if($id){
			$Itensvenda= itensvenda::where('id',$id)->get();
		}else{
			$Itensvenda = itensvenda::all();
		}
		return view('itensvendas.show',['itensvendas'=>$Itensvenda]);
	}

	public function edit($id){
		$Itensvenda = itensvenda::find($id);
		return view('itensvendas.edit',['itensvendas'=>$Itensvenda]);
	}

	public function update(Request $resquest){
		itensvenda::find($resquest->id)->update($resquest->except('_method'));
		return redirect('itensvendas/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		itensvenda::findOrFail($id)->delete();
		return redirect('itensvendas/index')->with('msg','Itensvenda apagado com sucesso');

	}

}

