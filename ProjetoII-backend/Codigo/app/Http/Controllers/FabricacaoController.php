<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabricacao;

class FabricacaoController extends Controller
{
	// 
	public function index(){

		$Fabricacao = fabricacao::all();
		return view('fabricação.index',['fabricacao' =>$Fabricacao]);
	}

	public function create(){
		
     
		return view('fabricação.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'ano'=>'required',
		]);
		
		$Fabricacao = new fabricacao();
		$Fabricacao->ano = $resquest->ano;
		$Fabricacao->save();
		
	}


	public function update(Request $resquest){
		
		$resquest->validate([
		'ano'=>'required',
		]);
		fabricacao::find($resquest->id)->update($resquest->except('_method'));
		
		return redirect('fabricação/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		
		if($id){
			$ = fabricacao::where('id',$id)->get();
		}else{
			$ = fabricacao::all();
		}
		
		return view('fabricação.show',['fabricacao'=>$Fabricacao]);
	}

	public function edit($id){
		
		$ = fabricacao::find($id);
		return view('fabricação.edit',['fabricacao'=>$Fabricacao]);
	}


	public function destroy($id){
		
		fabricacao::findOrFail($id)->delete();
		
		return redirect('fabricação/index')->with('msg','apagado com sucesso');

	}
}

