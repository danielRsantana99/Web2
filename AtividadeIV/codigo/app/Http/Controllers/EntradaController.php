<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Entrada;

class EntradaController extends Controller
{
	// 
	public function index(){
		$entradas = Entrada::all();
     
		return view('entradas.index', ['entradas' =>$entradas]);
	}

	public function create(){
		
     
		return view('entradas.create');
	}


	public function store(Request $resquest){
		$entrada - new Entrada();
		$entrada->idfornecedor = $resquest->idfornecedor;
		$entrada->valortotal = $resquest->valortotal;
		$entrada->save();
	}

	public function show($id){
		if($id){
			$entrada = Entrada::where('id',$id)->get();
		}else{
			$entrada = Entrada::all();
		}
		return view('entradas.show',['entradas'=>$entrada]);
	}

	public function edit($id){
		$cliente = Entrada::find($id);
		return view('entradas.edit',['entradas'=>$entrada]);
	}

	public function update(Request $resquest){
		Entrada::find($resquest->id)->update($resquest->except('_method'));
		return redirect('entradas/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		Entrada::findOrFail($id)->delete();
		return redirect('entradas/index')->with('msg','entrada apagado com sucesso');

	}
}

