<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Fornecedor;

class EntradaController extends Controller
{
	// 
	public function index(){
		$Entrada = entrada::all();
     
		return view('entradas.index', ['entrada' =>$Entrada]);
	}

	public function buscar(){
		$Fornecedor = fornecedor::all();
     
		return view('entradas.create', ['fornecedor' =>$Fornecedor]);
	}

	public function create(){
		
     
		return view('entradas.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'id_fornecedor'=>'required',
		'valortotalnota'=>'required',
		'datacompra'=>'required',
		]);
		$entrada - new entrada();
		$entrada->id_fornecedor = $resquest->id_fornecedor;
		$entrada->valortotalnota = $resquest->valortotalnota;
		$entrada->datacompra = $resquest->datacompra;
		$entrada->save();
	}

	public function update(Request $resquest){
		$resquest->validate([
		'id_fornecedor'=>'required',
		'valortotalnota'=>'required',
		'datacompra'=>'required',
		]);
		entrada::find($resquest->id)->update($resquest->except('_method'));
		return redirect('entradas/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		if($id){
			$Entrada = entrada::where('id',$id)->get();
		}else{
			$Entrada = entrada::all();
		}
		return view('entradas.show',['entrada'=>$Entrada]);
	}

	public function edit($id){
		$cliente = Entrada::find($id);
		return view('entradas.edit',['entrada'=>$Entrada]);
	}



	public function destroy($id){
		entrada::findOrFail($id)->delete();
		return redirect('entradas/index')->with('msg','entrada apagado com sucesso');

	}
}

