<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Carro;

class LocalizacaoController extends Controller
{
	// 
	public function index(){
		
		return view('localização.index');
	}

	public function create(){
		
     
		return view('localização.create');
	}


	public function store(Request $resquest){
		/*$resquest->validate([
		''=>'required',
		''=>'required',
		''=>'required',	
		]);
		
		$ = new Motor();
		$-> = $resquest->;
		$->save();
		*/
	}


	public function update(Request $resquest){
		/*
		$resquest->validate([
		''=>'required',
		''=>'required',
		''=>'required',	
		]);
		::find($resquest->id)->update($resquest->except('_method'));
		*/
		return redirect('localização/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		/*
		if($id){
			$ = ::where('id',$id)->get();
		}else{
			$ = ::all();
		}
		*/
		return view('localização.show',[''=>$]);
	}

	public function edit($id){
		/*
		$ = ::find($id);
		*/
		return view('localização.edit',[''=>$]);
	}


	public function destroy($id){
		/*
		::findOrFail($id)->delete();
		*/
		return redirect('localização/index')->with('msg','apagado com sucesso');

	}
}

