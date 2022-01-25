<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localizacao;

class LocalizacaoController extends Controller
{
	// 
	public function index(){

		$Localizacao = localizacao::all();
		
		return view('localização.index', ['localizacao' =>$Localizacao]);
	}

	public function create(){
		
     
		return view('localização.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'departamento'=>'required',
		]);
		
		$Localizacao = new localizacao();
		$Localizacao->departamento = $resquest->departamento;
		$Localizacao->save();
		
	}


	public function update(Request $resquest){
		$resquest->validate([
		'departamento'=>'required',
		]);
		localizacao::find($resquest->id)->update($resquest->except('_method'));
		
		return redirect('localização/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		
		if($id){
			$Localizacao = localizacao::where('id',$id)->get();
		}else{
			$Localizacao = localizacao::all();
		}
		
		return view('localização.show',['localizacao'=>$Localizacao]);
	}

	public function edit($id){
		
		$Localizacao = localizacao::find($id);
		
		return view('localização.edit',['localizacao'=>$Localizacao]);
	}


	public function destroy($id){
	
		localizacao::findOrFail($id)->delete();
		return redirect('localização/index')->with('msg','apagado com sucesso');

	}
}

