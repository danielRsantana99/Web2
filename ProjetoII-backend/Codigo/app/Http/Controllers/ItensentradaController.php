<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensentrada;

class ItensentradaController extends Controller
{
	// 
	public function index(){
		$Itensentradas = itensentrada::all();
     
		return view('itensentradas.index', ['itensentradas' =>$Itensentradas]);
	}

	public function create(){
		
     
		return view('itensentradas.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'id_produto'=>'required',
		'id_entrada'=>'required',
		'quantidade'=>'required',
		'precocompra'=>'required',	
		'icms'=>'required',	
		'ipi'=>'required',	
		'frete'=>'required',	
		'unidade'=>'required',	
		]);
		$Itensentradas - new itensentrada();
		$Itensentradas->id_produto = $resquest->id_produto;
		$Itensentradas->id_entrada = $resquest->id_entrada;
		$Itensentradas->quantidade = $resquest->quantidade;
		$Itensentradas->precocompra = $resquest->precocompra;
		$Itensentradas->icms = $resquest->icms;
		$Itensentradas->ipi = $resquest->ipi;
		$Itensentradas->frete= $resquest->frete;
		$Itensentradas->unidade= $resquest->unidade;
		$Itensentradas->save();
	}

	public function show($id){
		if($id){
			$Itensentradas = itensentradas::where('id',$id)->get();
		}else{
			$Itensentradas = itensentradas::all();
		}
		return view('itensentradas.show',['itensentradas'=>$Itensentradas]);
	}

	public function edit($id){
		$Itensentradas = itensentradas::find($id);
		return view('itensentradas.edit',['itensentradas'=>$Itensentradas]);
	}

	public function update(Request $resquest){
		$resquest->validate([
		'id_produto'=>'required',
		'id_entrada'=>'required',
		'quantidade'=>'required',
		'precocompra'=>'required',	
		'icms'=>'required',	
		'ipi'=>'required',	
		'frete'=>'required',	
		'unidade'=>'required',	
		]);
		itensentradas::find($resquest->id)->update($resquest->except('_method'));
		return redirect('itensentradas/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		itensentradas::findOrFail($id)->delete();
		return redirect('itensentradas/index')->with('msg','itensentrada apagado com sucesso');

	}

}

