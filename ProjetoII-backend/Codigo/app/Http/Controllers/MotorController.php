<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class MotorController extends Controller
{
	// 
	public function index(){
		
		$Motor = motor::all();
	
		return view('motor.index', ['motor' =>$Motor]);
	}

	public function create(){
		
     
		return view('motor.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'potencia'=>'required',
		]);
		
		$Motor = new motor();
		$Motor->potencia = $resquest->potencia;
		$Motor->save();
		
	}


	public function update(Request $resquest){
		
		$resquest->validate([
		'potencia'=>'required',
		]);

		motor::find($resquest->id)->update($resquest->except('_method'));
		
		return redirect('motor/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		
		if($id){
			$Motor = motor::where('id',$id)->get();
		}else{
			$Motor = motor::all();
		}
		
		return view('motor.show',[''=>$]);
	}

	public function edit($id){
		
		$Motor = motor::find($id);
		
		return view('motor.edit',[''=>$]);
	}


	public function destroy($id){
	
		motor::findOrFail($id)->delete();
		
		return redirect('motor/index')->with('msg','apagado com sucesso');

	}
}

