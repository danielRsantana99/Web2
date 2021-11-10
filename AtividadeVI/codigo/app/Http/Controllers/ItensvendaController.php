<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Itensvenda;

class ItensvendaController extends Controller
{
	// 
	public function index(){
		$itensvendas = Itensvenda::all();
     
		return view('itensvendas.index', ['itensvendas' =>$itensvendas]);
	}

	public function create(){
		
     
		return view('itensvendas.create');
	}


	public function store(Request $resquest){
		$itemvenda - new Itensvenda();
		//$cliente->nome = $resquest->nome;

		$itemvenda->save();
	}

	public function show($id){
		if($id){
			$itensvendas= Itensvenda::where('id',$id)->get();
		}else{
			$itensvendas = Itensvenda::all();
		}
		return view('itensvendas.show',['itensvendas'=>$itensvendas]);
	}

	public function edit($id){
		$itensvendas = Itensvenda::find($id);
		return view('itensvendas.edit',['itensvendas'=>$itensvendas]);
	}

	public function update(Request $resquest){
		Itensvenda::find($resquest->id)->update($resquest->except('_method'));
		return redirect('itensvendas/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		Itensvenda::findOrFail($id)->delete();
		return redirect('itensvendas/index')->with('msg','Itensvenda apagado com sucesso');

	}

}

