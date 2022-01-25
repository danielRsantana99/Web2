<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valvula;

class ValvulaController extends Controller
{
	// 
	public function index(){

		$Valvula = valvulas::all();
     
		return view('valvula.index', ['valvulas' =>$Valvula]);
	}

	public function create(){
		
     
		return view('valvula.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'quantidade'=>'required',
		]);
		
		$Valvula = new valvulas();
		$Valvula->quantidade = $resquest->quantidade;
		$Valvula->save();
		
	}


	public function update(Request $resquest){
		
		$resquest->validate([
		'quantidade'=>'required',
		]);

		valvulas::find($resquest->id)->update($resquest->except('_method'));
		
		return redirect('valvula/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		
		if($id){
			$Valvula = valvulas::where('id',$id)->get();
		}else{
			$Valvula =valvulas::all();
		}
		
		return view('valvula.show',['valvulas'=>$Valvula]);
	}

	public function edit($id){
		
		$Valvula = valvulas::find($id);
		
		return view('valvula.edit',[''=>$]);
	}


	public function destroy($id){
		
		valvulas::findOrFail($id)->delete();
		
		return redirect('valvula/index')->with('msg','apagado com sucesso');

	}
}

