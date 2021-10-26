<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Venda;

class VendaController extends Controller
{
	// 
	public function index(){
		$vendas = Venda::all();
     
		return view('vendas.index', ['vendas' =>$vendas]);
	}

	public function create(){
		
     
		return view('vendas.create');
	}


	public function store(Request $resquest){
		$venda - new Venda();
		$venda->idcliente = $resquest->idcliente;
		$venda->valortotal = $resquest->valortotal;
		$venda->save();
	}

	public function show($id){
		if($id){
			$vendas = Venda::where('id',$id)->get();
		}else{
			$vendas = Venda::all();
		}
		return view('vendas.show',['vendas'=>$vendas]);
	}

	public function edit($id){
		$vendas = Venda::find($id);
		return view('vendas.edit',['vendas'=>$vendas]);
	}

	public function update(Request $resquest){
		Venda::find($resquest->id)->update($resquest->except('_method'));
		return redirect('vendas/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		Venda::findOrFail($id)->delete();
		return redirect('vendas/index')->with('msg','venda apagado com sucesso');

	}

}

