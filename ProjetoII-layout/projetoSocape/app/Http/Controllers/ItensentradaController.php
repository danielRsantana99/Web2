<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Itensentrada;

class ItensentradaController extends Controller
{
	// 
	public function index(){
		$itensentradas = Itensentrada::all();
     
		return view('itensentradas.index', ['itensentradas' =>$itensentradas]);
	}

	public function create(){
		
     
		return view('itensentradas.create');
	}


	public function store(Request $resquest){
		$itementrada - new Itensentrada();
		//$cliente->nome = $resquest->nome;
		$itementrada->save();
	}

	public function show($id){
		if($id){
			$itensentradas = Itensentrada::where('id',$id)->get();
		}else{
			$$itensentradas = Itensentrada::all();
		}
		return view('itensentradas.show',['itensentradas'=>$itensentradas]);
	}

	public function edit($id){
		$itensentradas = Cliente::find($id);
		return view('itensentradas.edit',['itensentradas'=>$itensentradas]);
	}

	public function update(Request $resquest){
		Itensentrada::find($resquest->id)->update($resquest->except('_method'));
		return redirect('itensentradas/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		Itensentrada::findOrFail($id)->delete();
		return redirect('itensentradas/index')->with('msg','itensentrada apagado com sucesso');

	}

}

