<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
	// 
	public function index(){
		$Venda = venda::all();
     
		return view('vendas.index', ['vendas' =>$Venda]);
	}

	public function create(){
		
     
		return view('vendas.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'id_cliente'=>'required',
		'id_formapagamento'=>'required',
		'data'=>'required',
		'valortotal'=>'required',	
		]);
		$Venda - new venda();
		$Venda->id_cliente = $resquest->id_cliente;
		$Venda->id_formapagamento = $resquest->id_formapagamento;
		$Venda->data = $resquest->data;
		$Venda->valortotal = $resquest->valortotal;
		$Venda->save();
	}

	public function show($id){
		if($id){
			$Venda = venda::where('id',$id)->get();
		}else{
			$Venda = venda::all();
		}
		return view('vendas.show',['vendas'=>$vendas]);
	}

	public function edit($id){
		$vendas = Venda::find($id);
		return view('vendas.edit',['vendas'=>$vendas]);
	}

	public function update(Request $resquest){
		$resquest->validate([
		'id_cliente'=>'required',
		'id_formapagamento'=>'required',
		'data'=>'required',
		'valortotal'=>'required',	
		]);
		venda::find($resquest->id)->update($resquest->except('_method'));
		return redirect('vendas/index')->with('msg','Cadastro realizado com sucesso');
	}	

	public function destroy($id){
		venda::findOrFail($id)->delete();
		return redirect('vendas/index')->with('msg','venda apagado com sucesso');

	}

}

