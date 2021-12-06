<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Carro;

class CarroController extends Controller
{
	// 
	public function index(){
		
		return view('carro.index');
	}

	public function create(){
		
     
		return view('carro.create');
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
		return redirect('carro/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		/*
		if($id){
			$ = ::where('id',$id)->get();
		}else{
			$ = ::all();
		}
		*/
		return view('carro.show',[''=>$]);
	}

	public function edit($id){
		/*
		$ = ::find($id);
		*/
		return view('carro.edit',[''=>$]);
	}


	public function destroy($id){
		/*
		::findOrFail($id)->delete();
		*/
		return redirect('carro/index')->with('msg','apagado com sucesso');

	}
}

