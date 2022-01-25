<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
	// 
	public function index(){
		$Entrada = entrada::all();
		
		return view('categoria.index',['categoria' =>$Categoria);
	}

	public function create(){
		
     
		return view('categoria.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'categoria'=>'required',
		]);
		
		$Categoria = new categoria();
		$Categoria->categoria = $resquest->categoria;
		$Categoria->save();
		
	}


	public function update(Request $resquest){
		
		$resquest->validate([
		'categoria'=>'required',
		]);

		categoria::find($resquest->id)->update($resquest->except('_method'));
		
		return redirect('categoria/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		
		if($id){
			$Categoria = categoria::where('id',$id)->get();
		}else{
			$Categoria = categoria::all();
		}
		
		return view('categoria.show',['categoria'=>$Categoria]);
	}

	public function edit($id){
		
		$Categoria = categoria::find($id);
		
		return view('categoria.edit',[''=>$]);
	}


	public function destroy($id){
		
		categoria::findOrFail($id)->delete();
		
		return redirect('categoria/index')->with('msg','apagado com sucesso');

	}
}

