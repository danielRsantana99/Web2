<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
	// 
	public function index(){

		$Marca = marca::all();
		
		return view('marca.index', ['marca' =>$marca]);
	}

	public function create(){
		
     
		return view('marca.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'marca'=>'required',
		]);
		
		$Marca = new marca();
		$Marca->marca = $resquest->marca;
		$Marca->save();
		
	}


	public function update(Request $resquest){
		
		$resquest->validate([
		'marca'=>'required',
		]);
		marca::find($resquest->id)->update($resquest->except('_method'));
		
		return redirect('marca/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		
		if($id){
			$Marca = marca::where('id',$id)->get();
		}else{
			$Marca = marca::all();
		}
		
		return view('marca.show',[''=>$]);
	}

	public function edit($id){
		
		$Marca = marca::find($id);
		
		return view('marca.edit',[''=>$]);
	}


	public function destroy($id){
		
		marca::findOrFail($id)->delete();
		
		return redirect('marca/index')->with('msg','apagado com sucesso');

	}
}

